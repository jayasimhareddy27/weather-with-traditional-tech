const display=()=>{
        //var mylist=document.getElementById("myList");
        //var city=mylist.options[mylist.selectedIndex].text;
        var city=document.getElementById("city").value;
        if(city!==""){
            var request = new XMLHttpRequest();                     // create a request
            request.open("GET","https://api.openweathermap.org/data/2.5/weather?q=" +city +"&units=metric&appid=93f26e3c57081a6210de53b8dcfdfea4",true);
            request.onload =  function(){
                    
                if( request.status>=200 && request.status<400){
                    var data = JSON.parse(request.responseText);
                    getdetails(data,city);
                }
                else {
                    console.log("some error");
                }
            };
            request.onerror = function(){
                    console.log("connection error");
            };
            request.send();
        }
        else{
            document.getElementById('temp').innerHTML = "";
            document.getElementById('weather').innerHTML = "";
            document.getElementById('myimg').src = "" ;    
        }
};

const getdetails=(data,city)=>{
    const htm= `<h1> ${city} : </h1>`
    console.log(data);
    document.getElementById('temp').innerHTML =htm+ data.main.temp;
    document.getElementById('weather').innerHTML = data.weather[0].description;
    var icon = data.weather[0].icon+".png";
    document.getElementById('myimg').src = "https://openweathermap.org/img/w/"+icon ;
};


