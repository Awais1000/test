<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="start"></h1>
    <h1 id="meratag"></h1>
    <script>
        let count = 10;

        // for repeating some code for one time only

        let meriKey1 = setTimeout(function () {
            start.innerText=  "Start";
            clearTimeout(meriKey1)

            start.innerText="";
        }, 500)


        // for repeating some code for multiple times , setinterval() function is used, syntax is setinterval( function(){code to run multiple time} , time interval mean's after this interval the code wil run and this value is in miliseconds )

        // to stop the function , setInterval() return's some value store this value in some variable, as stored below in merikey.  
        let meriKey2 = setInterval(function () {
            // here h1 tag from the body is accssed
            meratag.innerText = count;
            count--;

            if (count == -1) {

                // to stop the function clearInterval function is used and the key returned by setInterval is used as Parameter.

                clearInterval(meriKey2);
            }

            // here 1000 means 1 second, because time is given in miliseconds
        }, 1000);   
    </script>
</body>

</html>