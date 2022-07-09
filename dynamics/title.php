                    <h2>
						<?php 
                            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                            if(!file_exists($page.".php")){
                                echo '404';
                            }else{
                                echo ucwords($page);
                            }
					    ?>
					</h2>