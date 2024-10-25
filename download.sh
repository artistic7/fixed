for i in `seq 1 56`; 
do
    j=$((i+2574));
    cp history$i.php history$j;
done