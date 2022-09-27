// active nav item
// const navItem = document.getElementsByClassName("nav-link");
// for (const element of navItem) {
//    element.addEventListener("click", () => {
//       for (const ele of navItem) {
//          ele.classList.remove("active");
//       }
//       element.classList.add("active");
//    });
// }

// tab
const tabs = document.getElementsByClassName("tab");
const contents = document.getElementsByClassName("content");
for (const element of tabs) {
   const tabId = element.getAttribute("tab-id");
   const content = document.getElementById(tabId);
   element.addEventListener("click", () => {
      for (const t of tabs) {
         t.classList.remove("active");
      }
      for (const c of contents) {
         c.classList.remove("active");
      }
      element.classList.add("active");
      content.classList.add("active");
   });
}

// input file preview
const previewImage = (id) => {
   document.getElementById(id).src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function () {
   $(".js-example-basic-single").select2();

   // $(function () {
   //    $("#datepicker").datepicker();
   //    $("#salutation").selectmenu();
   // });

   // SCROLL TOP
   $(".scroll-up").fadeOut();
   $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
         $(".scroll-up").fadeIn();
      } else {
         $(".scroll-up").fadeOut();
      }
   });

   //youtube video
   $(document).on("change keyup", 'input[name="video_id"]', function () {
      var vid_id = $(this).val();
      $(".youtube").css({
         "background-image":
            "url(https://img.youtube.com/vi/" + vid_id + "/maxresdefault.jpg)",
         "background-size": "cover",
      });
   });

   $(document).on("click", ".nk-video-plain-toggle", function () {
      var vid_id = $('input[name="video_id"]').val();
      playVid(vid_id);
   });

   function playVid(video_id) {
      this.isLoadingYoutube = true;
      let youtube = document.querySelector(".youtube");
      let iframe = document.createElement("iframe");

      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "");
      iframe.setAttribute(
         "src",
         "https://www.youtube.com/embed/" +
            video_id +
            "?rel=0&showinfo=0&autoplay=1"
      );

      this.innerHTML = "";
      youtube.appendChild(iframe);
      this.isLoadingYoutube = false;
   }

   //Map
   var map = L.map("map").setView([40.55, -96.41], 2);

   L.control
       .fullscreen({
          position: "topright",
          content: null,
          forceSeparateButton: true,
          forcePseudoFullscreen: true,
          fullscreenElement: false,
       })
       .addTo(map);

   L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
         '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors',
   }).addTo(map);

   // > Mutasim Billah:
   var arcgisOnline = L.esri.Geocoding.arcgisOnlineProvider();
   var gisDay = L.esri.Geocoding.featureLayerProvider({
      url: "https://services.arcgis.com/uCXeTVveQzP4IIcx/arcgis/rest/services/GIS_Day_Final/FeatureServer/0",
      searchFields: ["Name", "Organization"], // Search these fields for text matches
      label: "GIS Day Events", // Group suggestions under this header
      formatSuggestion: function (feature) {
         return (
            feature.properties.Name + " - " + feature.properties.Organization
         ); // format suggestions like this.
      },
   });
   var searchControl = L.esri.BootstrapGeocoder.search({
      inputTag: "address-search",
      providers: [arcgisOnline, gisDay],
   }).addTo(map);

   var results = L.layerGroup().addTo(map);
   var newMarker = {};
   searchControl.on("results", function (data) {
      results.clearLayers();
      for (var i = data.results.length - 1; i >= 0; i--) {
         if (newMarker != undefined) {
            map.removeLayer(newMarker);
         }
         document.getElementById("lat").value = data.results[i].latlng.lat;
         document.getElementById("lng").value = data.results[i].latlng.lng;
         document.getElementById("address-search").value = data.text;
         newMarker = L.marker(data.results[i].latlng);
         results.addLayer(newMarker);
      }
   });
   var geocodeService = L.esri.Geocoding.geocodeService();

   map.on("click", function (e) {
      if (newMarker != undefined) {
         map.removeLayer(newMarker);
      }
      newMarker = L.marker(e.latlng).addTo(map);

      document.getElementById("lat").value = e.latlng.lat;
      document.getElementById("lng").value = e.latlng.lng;
      geocodeService
         .reverse()
         .latlng(e.latlng)
         .run(function (error, result) {
            if (error) {
               return;
            }
            document.getElementById("address-search").value =
               result.address.Match_addr;
            // L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
         });
   });

   $(".leaflet-control-attribution").remove();
});

const toggleSideMenu = () => {
   document.getElementById("sidebar").classList.toggle("active");
   document.getElementById("content").classList.toggle("active");
   // console.log("me");
};
const hideSidebar = () => {
   document.getElementById("formWrapper").classList.remove("active");
   document.getElementById("formWrapper2").classList.remove("active");
};
const toggleClass = () => {
   document.getElementById("formWrapper").classList.add("active");
};
const callSignIn = () => {
   document.getElementById("formWrapper").classList.add("active");
   document.getElementById("formWrapper2").classList.remove("active");
};
const callSignUp = () => {
   document.getElementById("formWrapper").classList.remove("active");
   document.getElementById("formWrapper2").classList.add("active");
};

const toggleContactSidebar = () => {
   document.getElementById("addContactSidebar").classList.toggle("active");
};
