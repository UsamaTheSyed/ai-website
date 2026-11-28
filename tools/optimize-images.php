<?php
// Run from the repository root. Originals are retained for future editing.
$root = dirname(__DIR__);
$replacements = [];
$before = $after = 0;
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/assets/images')) as $file) {
    if (!$file->isFile() || !preg_match('/\.(png|jpe?g)$/i', $file->getFilename()) || $file->getSize() < 80000) continue;
    $source = $file->getPathname();
    $image = @imagecreatefromstring(file_get_contents($source));
    if (!$image) continue;
    imagepalettetotruecolor($image);
    imagealphablending($image, false);
    imagesavealpha($image, true);
    $dest = preg_replace('/\.[^.]+$/', '.optimized.webp', $source);
    imagewebp($image, $dest, 82);
    imagedestroy($image);
    if (filesize($dest) >= $file->getSize()) { unlink($dest); continue; }
    $relative = str_replace('\\', '/', substr($source, strlen($root) + 1));
    $replacements[$relative] = str_replace('\\', '/', substr($dest, strlen($root) + 1));
    $replacements[str_replace('assets/', '../', $relative)] = str_replace('assets/', '../', $replacements[$relative]);
    $before += $file->getSize(); $after += filesize($dest);
}
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root)) as $file) {
    if (!$file->isFile() || !preg_match('/\.(php|css|js)$/', $file->getFilename()) || str_contains($file->getPathname(), DIRECTORY_SEPARATOR . 'tools' . DIRECTORY_SEPARATOR)) continue;
    $text = file_get_contents($file->getPathname());
    $updated = strtr($text, $replacements);
    // Dimensions reserve layout space; defer images below the first section.
    if ($file->getExtension() === 'php') {
        $updated = preg_replace_callback('/<img\b[^>]*>/i', function ($m) use ($root, $file) {
            $tag = $m[0];
            if (!preg_match('/\bsrc="(assets\/images\/[^"?]+)"/', $tag, $src)) return $tag;
            $size = @getimagesize($root . '/' . $src[1]);
            if ($size && !preg_match('/\bwidth=/', $tag) && !preg_match('/\bheight=/', $tag)) $tag = str_replace('<img', '<img width="' . $size[0] . '" height="' . $size[1] . '"', $tag);
            if (!str_contains($tag, 'decoding=')) $tag = str_replace('<img', '<img decoding="async"', $tag);
            $eager = preg_match('/\/(hero|logo)\//', $src[1]) || in_array($file->getFilename(), ['menu.php', 'inner-banner.php']);
            if (!$eager && !str_contains($tag, 'loading=')) $tag = str_replace('<img', '<img loading="lazy"', $tag);
            if (str_contains($src[1], '/hero/banImg.') && !str_contains($tag, 'fetchpriority=')) $tag = str_replace('<img', '<img fetchpriority="high"', $tag);
            return $tag;
        }, $updated);
    }
    if ($updated !== $text) file_put_contents($file->getPathname(), $updated);
}
echo "Optimized image bytes: $before -> $after\n";
