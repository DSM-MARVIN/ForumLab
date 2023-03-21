
function nonlenFurn(len){
  return len
}

jQuery(function() {
  jQuery('.multiSelect').each(function(e) {
    var self = jQuery(this);
    var field = self.find('.multiSelect_field');
    var fieldOption = field.find('option');
    var placeholder = field.attr('data-placeholder');

    field.hide().after(`<div class="multiSelect_dropdown"></div>
                        <span class="multiSelect_placeholder">` + placeholder + `</span>
                        <ul class="multiSelect_list"></ul>
                        <span class="multiSelect_arrow"></span>`);
    
    fieldOption.each(function(e) {
      jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="`+jQuery(this).val()+`">
                                            <a class="multiSelect_text">`+jQuery(this).text()+`</a>
                                          </li>`);
    });
    
    var dropdown = self.find('.multiSelect_dropdown');
    var list = self.find('.multiSelect_list');
    var option = self.find('.multiSelect_option');
    var optionText = self.find('.multiSelect_text');
    var nonFurnArray = [];
    
    dropdown.attr('data-multiple', 'true');
    list.css('top', dropdown.height() + 5);
    
    option.click(function(e) {
      var self = jQuery(this);

      //test
      console.log(option.val());
      nonFurnArray.push(self.text().trim());
      console.log(nonFurnArray);

      let nonFurnLen = nonFurnArray.length;
      const outputFurn = document.querySelector('.non-furnArr');

      if(nonFurnLen !== 0 || nonFurnLen !== undefined){
        outputFurn.innerHTML = `${JSON.stringify(nonFurnArray, null, 4)}`;
      }

      // form.addEventListener('click', addTask(nonFurnArray));
      console.log(nonFurnLen);
      nonlenFurn(nonFurnLen);
      addTask(e, nonFurnLen);

			e.stopPropagation();
	    self.addClass('-selected');
	    field.find('option:contains(' + self.children().text() + ')').prop('selected', true);
      dropdown.append(function(e) {
        return jQuery('<span class="multiSelect_choice">'+ self.children().text() +'<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function(e) {
          var self = jQuery(this);
          e.stopPropagation();
          self.remove();

      //test
          console.log(self.text());

          let value = self.text();
          
          nonFurnArray = nonFurnArray.filter(item => item !== value);

          nonFurnLen = nonFurnArray.length;

          if(nonFurnLen !== 0 || nonFurnLen !== undefined){
            outputFurn.innerHTML = `${nonFurnArray}`;
          }

          addTask(e, nonFurnLen);

          console.log(nonFurnArray);


          console.log(nonFurnLen);





          list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
          list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
          field.find('option:contains(' + self.text() + ')').prop('selected', false);
          if (dropdown.children(':visible').length === 0) {
            dropdown.removeClass('-hasValue');
          }
        });
      }).addClass('-hasValue');
	    list.css('top', dropdown.height() + 5);
	    if (!option.not('.-selected').length) {
	      list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
	    }
    });
    
    dropdown.click(function(e) {
      e.stopPropagation();
      e.preventDefault();
      dropdown.toggleClass('-open');
      list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
    });
    
    jQuery(document).on('click touch', function(e) {
        if (dropdown.hasClass('-open')) {
            dropdown.toggleClass('-open');
            list.removeClass('-open');
        }
    });
  });
});




const form = document.querySelector('.next');
const fndRoute = document.querySelector('.find-route');
let sumArray = [];
let furnsumArray = [];

const addTask = (e , nonfurn)=> {
  e.preventDefault();
  // console.log( ` the lenth is ${nonfurn}`)
  if( nonfurn !== undefined){
    furnsumArray.push(nonfurn);
  } 

  let lastElementFurn = furnsumArray[furnsumArray.length - 1];
  if( lastElementFurn == undefined){
    lastElementFurn = 0;
  } 

  console.log( ` the lenth is ${lastElementFurn}`)

  console.log(lastElementFurn);


  const mt = document.querySelector('.move-type');
  const mtP = document.querySelector('.move-type-p');

  const rt = document.querySelector('.res-type');
  const rtP = document.querySelector('.res-type-p');

  const lc = document.querySelector('.LC');
  const lcp = document.querySelector('.LC-p');

  const el = document.querySelector('.EL');
  const elp = document.querySelector('.EL-p');

  const st = document.querySelector('.ST');
  const stp = document.querySelector('.ST-p');
  
  const vcl = document.querySelector('.vcl');

  var moveSize = document.getElementById("move-size");
  var placeType = document.getElementById("place-type");
  var value1 = moveSize.value;
  var value2 = placeType.value;
  console.log(value1)

  switch(value1) {
    case '1':
      console.log('value is 1')
      sizeCost = 800;
      console.log(sizeCost)
      mt.innerHTML = `Moving a few items`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Van-body truck`;
      break;
    case '2':
      console.log('value is 2')
      sizeCost = 1200;
      console.log(sizeCost)
      mt.innerHTML = `Studio apartment`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Van-body truck`;
      break;
    case '3':
      console.log('value is 3')
      sizeCost = 1600;
      console.log(sizeCost)
      mt.innerHTML = `1 bedroom residence`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Van-body truck`;
      break;
    case '4':
      console.log('value is 4')
      sizeCost = 2100;
      console.log(sizeCost)
      mt.innerHTML = `2 bedroom residence`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Tanker truck`;
      break;
    case '5':
      console.log('value is 5')
      sizeCost = 2500;
      console.log(sizeCost)
      mt.innerHTML = `3 bedroom residence`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Tanker truck`;
      break;
    case '6':
      console.log('value is 6')
      sizeCost = 2900;
      console.log(sizeCost)
      mt.innerHTML = `4 bedroom residence`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Tanker truck`;
      break;
    case '7':
      console.log('value is 7')
      sizeCost = 3700;
      console.log(sizeCost)
      mt.innerHTML = `5+ bedroom residence`;
      mtP.innerHTML = `R${sizeCost}`;
      vcl.innerHTML = `Tanker truck`;
      break;
    default:
      // code block
  } 


  switch(value2) {
    case '1':
      console.log('flat')
      // window.location.assign();

    const floor = document.querySelector('.floor');
    const floorValue = document.querySelector('.select-floor ');
      floor.classList.remove("hidden");
     let floorVal = floorValue.value;
     console.log(`the floor is ${floorVal}`)

      // floor.addEventListener('click', addTask);
      // addTask()
      sizeCost += 1000;
      console.log(sizeCost)
      rt.innerHTML = `Flat`;
      rtP.innerHTML = `R${1000}`;
      break;
    case '2':
      console.log('apartment')
      sizeCost += 800;
      console.log(sizeCost)
      rt.innerHTML = `Apartment`;
      rtP.innerHTML = `R${800}`;
      break;
    case '3':
      console.log('townhouse')
      sizeCost += 600;
      console.log(sizeCost)
      rt.innerHTML = `Townhouse`;
      rtP.innerHTML = `R${600}`;
      break;
      default:
      // code block
  } 
  // var text = e.options[e.selectedIndex].text;
 let check1 = document.querySelector('.checkboxLC').checked;
 let check2 = document.querySelector('.checkboxEL').checked;
 let check3 = document.querySelector('.checkboxST').checked;
 if(check1 == true){
    sizeCost += 400;
    lc.innerHTML = `Long carry`;
    lcp.innerHTML = `R${400}`;
 }else{
  lc.innerHTML = '';
  lcp.innerHTML = '';
 }

 if(check2 == true){
  sizeCost += 400;
  el.innerHTML = `Has elevator`;
  elp.innerHTML = `R${400}`;
}else{
el.innerHTML = '';
elp.innerHTML = '';
}

if(check3 == true){
  sizeCost += 400;
  st.innerHTML = `Need shuttle`;
  stp.innerHTML = `R${400}`;
}else{
st.innerHTML = '';
stp.innerHTML = '';
}


 
 console.log(check1)
 calcRoute(sizeCost, lastElementFurn)
};

form.addEventListener('click', addTask);
fndRoute.addEventListener('click', addTask)
let sizeCost;



//googlemaps API


var myLatLng = { lat: -26.2041, lng: 28.0473 };
var mapOptions = {
    center: myLatLng,
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);


//define calcRoute function
function calcRoute(cost, nonfurn) {
    //create request


    console.log(`this is a new value ${nonfurn}`)
    let quansum = cost;

    if( quansum !== undefined){
      sumArray.push(quansum);
    } 

    console.log(sumArray);
    console.log(cost);
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.KILOMETERS
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='text-gray-700'>From: " + document.getElementById("from").value + ".<br />To: " + document.getElementById("to").value + ".<br /> Driving distance <i class='fas fa-road text-gray-600'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start text-purple-500'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";
            
            const subTotal = document.querySelector('.sub-total');
            const total = document.querySelector('.total');
            const dst = document.querySelector('.dst');


            let lastElement = sumArray[sumArray.length - 1];
            console.log(lastElement)

            // let sumFromQuan = lastElement;
            let distance = Math.round(((result.routes[0].legs[0].distance.value)/1000) * 10) / 10;
            // let time = Math.round((result.routes[0].legs[0].duration.value)/60);



            // non Furniture


            //end non Furniture

            
            
            
            // console.log(sumArray);

            let calculations = (distance/12.5 * 21.08) + lastElement + nonfurn ;
            // console.log(calculations)

            dst.innerHTML = `${distance}km`;

            if (subTotal) {
              // subTotal.innerHTML = `R${Math.round(calculations * 100) / 100}`;
              subTotal.innerHTML = `R${lastElement}`;
            }

            if (total) {
              // total.innerHTML = `R${Math.round((((15/100)*(Math.round(calculations * 100) / 100)) + (Math.round(calculations * 100) / 100)) * 100) / 100 }`;
              total.innerHTML = `R${calculations}`;
            }

            // console.log(distance)
            // console.log(time)
  

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
        }
    });

}



//create autocomplete objects for all inputs
var options = {
    types: ['(cities)']
}

var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

//tile

var tiles = document.querySelectorAll('.tile');
var wrapper = document.getElementById('effects_wrapper');

wrapper.addEventListener('change', selected);

function selected(e) {
  tiles.forEach((tile) => {
    if(e.target.classList.contains('checkbox')) {
      var item = e.target.parentElement;
    item.classList.toggle('selected');
    };
  });
}

let myPopup = document.querySelector(".popup-box");
let btnClose = document.querySelector("span");

setTimeout(poPup, 2000);

function poPup() {
  myPopup.style.display = "block";
}

btnClose.onclick = function () {
  myPopup.style.display = "none";
};


// non-furniture

$(".button-pop-up").on("click", function() {
  $(".overlay").addClass("is-on");
});

$("#close").on("click", function() {
  $(".overlay").removeClass("is-on");
});

