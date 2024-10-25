for i in `seq 1 56`; 
do
    j=$((i+2574));
    rm history$j;
    cp history$i.php history$j.php;
done