# Diadoc API

За основу взят пакет https://github.com/magdv/diadoc-php.

## proto-файлы

Proto-файлы взяты из пакета https://github.com/diadoc/diadocsdk-csharp.

Корректировки:

* В начале файлов добавлена строка `syntax = "proto3";`.
* В сообщениях удалены атрибуты `default` (см. https://protobuf.dev/programming-guides/proto3/#default).
* В сообщениях удалены атрибуты `required` (см. https://protobuf.dev/programming-guides/proto2/#required-deprecated).
* Перечисления должны начинаться с 0.
