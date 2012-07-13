taskkill /f /im TEMPerV21.exe
cd ../../..
cd Users/user/Documents/PCsensor/
cd TEMPer V23.3/Data
move *.csv ../../../../../../www/input
cd ../../../../../../www/input
ren *.csv temp.csv
cd ../js
csvtohtml.js
cd ../input
del temp.csv