// JSON KOJI ĆEMO PREUZETI IZ BAAZE IMATI ĆE ISTE KEYEVE DA NE MORAMO MIJENJATI FUNKCIJE
if (typeof Worker !== "undefined") {
  // PROVJERA JESU LI WEBWORKERI DOSTUPNI
  if (typeof w == "undefined") {
    w = new Worker("public/js/getEvents.js?v=2");
    w2 = new Worker("public/js/getProperties.js");
    w.postMessage({ location: location.origin }); // location.origin url stranice za provjeru
    w2.postMessage({ location: location.origin });
  }
  w2.onmessage = function (event) {
    if (event.data.rez.length > 0) {
      document.getElementById("objektiHolder").innerHTML = "";
      document.getElementById("objektiHolder").innerHTML = event.data.rez;
    } else {
      console.log("No data received from worker.");
    }
  };
  w.onmessage = function (event) {
    if (event.data.length > 0) {
      main_Object.events = event.data;
      const currentMonth = new Date().getMonth() + 1; // get the current month (1-12)
      const filteredEvents = main_Object.events.filter((event) => {
        const eventMonth = new Date(event.match_date).getMonth() + 1; // get the month from the event date (1-12)
        console.log("event.match_date", event.match_date);
        // const eventMonth = parseInt(event.match_date.substring(5, 7)); // extract the month from the date string
        console.log("eventMonth", eventMonth.toString().padStart(2, "0"));
        console.log("currentMonth", currentMonth.toString().padStart(2, "0"));
        return event.match_date == currentMonth.toString().padStart(2, "0");
      });

      console.log("filteredEvents", filteredEvents);
      loopScrollers(filteredEvents);
      buildEventContent(filteredEvents, "eventsEvents", 1, 10);
    }
  };
}
// END ASYNC PREUZIMANJE PODATAKA
