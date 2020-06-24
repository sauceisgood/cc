<?php
require "./cc.class.php";
echo("###############################################\n");
echo("#     Gerador cc e BIN Checker.               #\n");
echo("###############################################\n");
echo("# Create By : Thorero                         #\n");
echo("# Code : PHP                                  #\n");
echo("# Thx To Thorero                              #\n");
echo("###############################################\n");
echo "[+] BIN : "; $bin = trim(fgets(STDIN));
echo "[+] Validar? ? 1/0 : "; $check = trim(fgets(STDIN));
echo "[+] Amount : "; $amount = trim(fgets(STDIN));
$new = new CC($bin, $check, $amount);
echo $new->Execute();
