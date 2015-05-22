wow = new WOW(
  {
    bocClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
  }
  )
  wow.init();

  
$(function(){
    $('#map1').gmap3({
      map:{
        options:{
          center:[46.578498,2.457275],
          zoom: 5
        }
      },
      marker:{
        values:[
        {latLng:[48.8620722, 2.352047], data:"Paris !"},
        {address:"86000 Poitiers, France", data:"Poitiers : great city !"},
        {address:"66000 Perpignan, France", data:"Perpignan ! <br> GO USAP !", options:{icon: "http://maps.google.com/mapfiles/marker_green.png"}}
        ],
        options:{
          draggable: false
        },
        events:{
          mouseover: function(marker, event, context){
            var map = $(this).gmap3("get"),
            infowindow = $(this).gmap3({get:{name:"infowindow"}});
            if (infowindow){
              infowindow.open(map, marker);
              infowindow.setContent(context.data);
            } else {
              $(this).gmap3({
                infowindow:{
                  anchor:marker, 
                  options:{content: context.data}
                }
              });
            }
          },
          mouseout: function(){
            var infowindow = $(this).gmap3({get:{name:"infowindow"}});
            if (infowindow){
              infowindow.close();
            }
          }
        }
      }
    });
});

// tab
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
// end tab

