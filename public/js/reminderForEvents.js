const popup = document.getElementById("reminder-popup");
const icon = document.getElementById("reminder-icon");
const select = document.getElementById("events-select");
const saveBtn = document.getElementById("save-reminder");
const closeBtn = document.getElementById("close-popup");

// Kada se klikne na ikonu, otvara se popup i dohvaćaju događaji
// icon.addEventListener("click", async () => {
//   popup.style.display = "block";
//   // const events = await fetchEvents();
//   // populateDropdown(events);
// });
const setReminderEvent = (el) => {
  const eventDate = el.parentElement.querySelector("h2").textContent;
  const eventTitle = el.parentElement.querySelector("h3").textContent;
  document.getElementById("popupEventTitle").textContent = eventTitle;
  document.getElementById("popupEventDate").textContent = eventDate;

}
// Dohvaća događaje s ciljne stranice
async function fetchEvents() {
  try {
    const res = await fetch(
      "https://www.sportskiobjekti.hr/kalendar-dogadjanja/40"
    );
    const html = await res.text();
    const parser = new DOMParser();
    const doc = parser.parseFromString(html, "text/html");
    const ul = doc.querySelector("#months-events ul");
    const events = [];

    if (ul) {
      ul.querySelectorAll("li").forEach((li) => {
        const title = li
          .querySelector(".event-name-desc h3")
          ?.textContent.trim();
        const dateDiv = li.querySelector("div > div > div:nth-child(2)");
        const date = dateDiv?.textContent.trim();
        if (title && date) {
          events.push({ title, date });
        }
      });
    }

    return events;
  } catch (error) {
    console.error("Greška prilikom dohvata događaja:", error);
    return [];
  }
}

// Popunjava dropdown s dohvaćenim događajima
function populateDropdown(events) {
  select.innerHTML = "";
  if (events.length === 0) {
    const opt = document.createElement("option");
    opt.textContent = "Nema dostupnih događaja.";
    select.appendChild(opt);
    return;
  }

  events.forEach((event) => {
    const opt = document.createElement("option");
    opt.value = JSON.stringify(event);
    opt.textContent = `${event.title} (${event.date})`;
    select.appendChild(opt);
  });
}

// Simulacija slanja podsjetnika (Bez backend-a)
saveBtn.addEventListener("click", () => {
  //const selectedEvent = JSON.parse(select.value);
  const daysBefore = document.getElementById("reminder-days").value;
  const email = document.getElementById("user-email").value;

  if (!email) {
    document.getElementById("user-email").focus();
    alert("Unesi email adresu za podsjetnik.");
    return;
  }

  // Ovdje kasnije ide API poziv prema backendu za slanje podsjetnika
  console.log("Podsjetnik poslan: ", {
   // event: selectedEvent,
    daysBefore: daysBefore,
    email: email,
  });

  alert(
    "✅ Podsjetnik spremljen. Slanje će biti omogućeno kad se spoji backend."
  );
  popup.style.display = "none";
});

// Funkcija za zatvaranje popupa
function closePopup() {
  popup.style.display = "none";
}

// Zatvara popup kada se klikne na X
closeBtn.addEventListener("click", closePopup);

// Zatvara popup kada se pritisne ESC
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closePopup();
  }
});
