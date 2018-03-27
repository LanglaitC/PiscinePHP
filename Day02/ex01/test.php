#!/usr/bin/php
<?php
date_default_timezone_set('Asia/Dhaka');
function ft_analyse_month($str) {
	  if ($str == "Janvier" || $str == "janvier")
		      return(1);
			    elseif ($str == "Fevrier" || $str == "fevrier")
				    return(2);
					  elseif ($str == "Mars" || $str == "mars")
					      return(3);
						    elseif ($str == "Avril" || $str == "avril")
							    return(4);
								  elseif ($str == "Mai" || $str == "mai")
								      return(5);
									    elseif ($str == "Juin" || $str == "juin")
										    return(6);
											  elseif ($str == "Juillet" || $str == "juillet")
											      return(7);
												    elseif ($str == "Aout" || $str == "aout")
													    return(8);
														  elseif ($str == "Septembre" || $str == "septembre")
														      return(9);
															    elseif ($str == "Octobre" || $str == "octobre")
																    return(10);
																	  elseif ($str == "Novembre" || $str == "novembre")
																	      return(11);
																		    elseif ($str == "Decembre" || $str == "decembre")
																			      return(12);
																				    else {
																						    print("Wrong Format\n");
																							    exit();
																								  }
}
function ft_check_jour($str) {
	  if (preg_match("/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)$/", $str) != 1) {
		      print("Wrong Format\n");
			      exit();
				    }
					  return(1);
}
$tab;
$tab2;
if ($argc > 1) {
	  $tab = explode(" ", $argv[1]);
	    if (count($tab) != 5) {
			    print("Wrong Format\n");
				    exit();
					  }
					    $jour = ft_check_jour($tab[0]);
						  $day = $tab[1];
						    $year = $tab[3];
							  if (preg_match("/^[0-9]{1,2}$/", $day) == 0 || preg_match("/^[0-9]{4}$/", $year) == 0) {
								      print("Wrong Format\n");
									      exit();
										    }
											  $month = ft_analyse_month($tab[2]);
											    $tab2 = explode(":", $tab[4]);
												  if (count($tab2) != 3) {
													      print("Wrong Format\n");
														      exit();
															    }
																  $hour = $tab2[0];
																    $min = $tab2[1];
																	  $sec = $tab2[2];
																	    if (preg_match("/^[0-9]{1,2}$/", $hour) == 0 || preg_match("/^[0-9]{1,2}$/", $min) == 0 || preg_match("/^[0-9]{1,2}$/", $sec) == 0) {
																			    print("Wrong Format\n");
																				    exit();
																					  }
																					    print(mktime($hour, $min, $sec, $month, $day, $year));
																						  print("\n");
}
?>
