<?php

namespace MHIbrahim\Storage\Contract;
interface StorageInterface
{
    public function set($key,$value);
    public function get($key);
    public function delete($key);
    public function destroy();
    public function all();
}
