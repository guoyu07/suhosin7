--TEST--
Testing: suhosin.upload.disallow_binary=Off
--INI--
suhosin.log.syslog=0
suhosin.log.sapi=0
suhosin.log.stdout=255
suhosin.log.script=0
file_uploads=1
suhosin.upload.disallow_binary=Off
max_file_uploads=40
suhosin.upload.max_uploads=40
--SKIPIF--
<?php include('../skipif.inc'); ?>
--COOKIE--
--GET--
--POST_RAW--
Content-Type: multipart/form-data; boundary=bound
--bound
Content-Disposition: form-data; name="F00"; filename="F00"

 
--bound
Content-Disposition: form-data; name="F01"; filename="F01"


--bound
Content-Disposition: form-data; name="F02"; filename="F02"


--bound
Content-Disposition: form-data; name="F03"; filename="F03"


--bound
Content-Disposition: form-data; name="F04"; filename="F04"


--bound
Content-Disposition: form-data; name="F05"; filename="F05"


--bound
Content-Disposition: form-data; name="F06"; filename="F06"


--bound
Content-Disposition: form-data; name="F07"; filename="F07"


--bound
Content-Disposition: form-data; name="F08"; filename="F08"


--bound
Content-Disposition: form-data; name="F09"; filename="F09"

	
--bound
Content-Disposition: form-data; name="F0a"; filename="F0a"



--bound
Content-Disposition: form-data; name="F0b"; filename="F0b"


--bound
Content-Disposition: form-data; name="F0c"; filename="F0c"


--bound
Content-Disposition: form-data; name="F0d"; filename="F0d"


--bound
Content-Disposition: form-data; name="F0e"; filename="F0e"


--bound
Content-Disposition: form-data; name="F0f"; filename="F0f"


--bound
Content-Disposition: form-data; name="F10"; filename="F10"


--bound
Content-Disposition: form-data; name="F11"; filename="F11"


--bound
Content-Disposition: form-data; name="F12"; filename="F12"


--bound
Content-Disposition: form-data; name="F13"; filename="F13"


--bound
Content-Disposition: form-data; name="F14"; filename="F14"


--bound
Content-Disposition: form-data; name="F15"; filename="F15"


--bound
Content-Disposition: form-data; name="F16"; filename="F16"


--bound
Content-Disposition: form-data; name="F17"; filename="F17"


--bound
Content-Disposition: form-data; name="F18"; filename="F18"


--bound
Content-Disposition: form-data; name="F19"; filename="F19"


--bound
Content-Disposition: form-data; name="F1a"; filename="F1a"


--bound
Content-Disposition: form-data; name="F1b"; filename="F1b"


--bound
Content-Disposition: form-data; name="F1c"; filename="F1c"


--bound
Content-Disposition: form-data; name="F1d"; filename="F1d"


--bound
Content-Disposition: form-data; name="F1e"; filename="F1e"


--bound
Content-Disposition: form-data; name="F1f"; filename="F1f"


--bound
Content-Disposition: form-data; name="F20"; filename="F20"

 
--bound
Content-Disposition: form-data; name="F21"; filename="F21"

!
--bound
Content-Disposition: form-data; name="F22"; filename="F22"

"
--bound--
--FILE--
<?php
var_dump($_FILES);
?>
--EXPECTF--
array(35) {
  ["F00"]=>
  array(5) {
    ["name"]=>
    string(3) "F00"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F01"]=>
  array(5) {
    ["name"]=>
    string(3) "F01"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F02"]=>
  array(5) {
    ["name"]=>
    string(3) "F02"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F03"]=>
  array(5) {
    ["name"]=>
    string(3) "F03"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F04"]=>
  array(5) {
    ["name"]=>
    string(3) "F04"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F05"]=>
  array(5) {
    ["name"]=>
    string(3) "F05"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F06"]=>
  array(5) {
    ["name"]=>
    string(3) "F06"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F07"]=>
  array(5) {
    ["name"]=>
    string(3) "F07"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F08"]=>
  array(5) {
    ["name"]=>
    string(3) "F08"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F09"]=>
  array(5) {
    ["name"]=>
    string(3) "F09"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F0a"]=>
  array(5) {
    ["name"]=>
    string(3) "F0a"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F0b"]=>
  array(5) {
    ["name"]=>
    string(3) "F0b"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F0c"]=>
  array(5) {
    ["name"]=>
    string(3) "F0c"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F0d"]=>
  array(5) {
    ["name"]=>
    string(3) "F0d"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(0)
  }
  ["F0e"]=>
  array(5) {
    ["name"]=>
    string(3) "F0e"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F0f"]=>
  array(5) {
    ["name"]=>
    string(3) "F0f"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F10"]=>
  array(5) {
    ["name"]=>
    string(3) "F10"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F11"]=>
  array(5) {
    ["name"]=>
    string(3) "F11"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F12"]=>
  array(5) {
    ["name"]=>
    string(3) "F12"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F13"]=>
  array(5) {
    ["name"]=>
    string(3) "F13"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F14"]=>
  array(5) {
    ["name"]=>
    string(3) "F14"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F15"]=>
  array(5) {
    ["name"]=>
    string(3) "F15"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F16"]=>
  array(5) {
    ["name"]=>
    string(3) "F16"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F17"]=>
  array(5) {
    ["name"]=>
    string(3) "F17"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F18"]=>
  array(5) {
    ["name"]=>
    string(3) "F18"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F19"]=>
  array(5) {
    ["name"]=>
    string(3) "F19"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1a"]=>
  array(5) {
    ["name"]=>
    string(3) "F1a"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1b"]=>
  array(5) {
    ["name"]=>
    string(3) "F1b"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1c"]=>
  array(5) {
    ["name"]=>
    string(3) "F1c"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1d"]=>
  array(5) {
    ["name"]=>
    string(3) "F1d"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1e"]=>
  array(5) {
    ["name"]=>
    string(3) "F1e"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F1f"]=>
  array(5) {
    ["name"]=>
    string(3) "F1f"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F20"]=>
  array(5) {
    ["name"]=>
    string(3) "F20"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F21"]=>
  array(5) {
    ["name"]=>
    string(3) "F21"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["F22"]=>
  array(5) {
    ["name"]=>
    string(3) "F22"
    ["type"]=>
    string(0) ""
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
}