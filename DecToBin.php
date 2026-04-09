<?php
    const MAX_INT = 2 ** 32 - 1;
    echo("Input an unsigned integer number\r\n");
    $uNum = intval(chop(fgets(STDIN)));
    if(($uNum < 0) or ($uNum > MAX_INT))
    {
        echo("Invalid number format");
        exit(0);
    }
    $uTempVal = $uNum;
    $strBinNum ="";
    while ($uTempVal > 0)
    {
        $strBinNum = ($uTempVal % 2) . $strBinNum;
        $uTempVal = intdiv($uTempVal, 2);
    }
    if(strlen($strBinNum) == 0)
    {
        $strBinNum = "0";
    }
    printf("The binary equivalent of the number %d is %s\r\n", $uNum, $strBinNum);
    fgetc(STDIN);
?>