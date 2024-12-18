<?php

$pattern = __DIR__ . '/proto/*.proto';

echo 'Строим список proto-файлов' . PHP_EOL;
$files = rglob($pattern);

echo 'Начинаем генерацию' . PHP_EOL;
if (is_array($files)) {
    foreach ($files as $file) {
        echo 'Обработка файла - ' . $file . PHP_EOL;
        exec(
            'protoc --proto_path=proto --php_out=phpProto ' . str_replace(__DIR__ . '/', '', $file),
            $output,
        );
    }
}

echo 'Запуск composer dump-autoload' . PHP_EOL;
exec('composer dump-autoload', $funcOutput);
foreach ($funcOutput as $funcOutputItem) {
    echo $funcOutputItem . PHP_EOL;
}

function rglob(string $pattern, int $flags = 0): array|bool
{
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $directory) {
        $files = array_merge($files, rglob($directory . '/' . basename($pattern), $flags));
    }

    return $files;
}
