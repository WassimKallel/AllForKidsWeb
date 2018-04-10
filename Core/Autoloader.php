<?php

 function loadDependency($className)
  {

      $file = ROOT_DIR.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
      if (!file_exists($file)) {
          return false;
      }
      else {

          require_once $file;
          return true;
      }
  }

