
    // Tu ćemo spremiti sve evente
    let main_Object = {
      events: []
    };
    const screenWidth = window.innerWidth;  //FLATPICKER DEFAULTS
    const showMonths = screenWidth < 641 ? 1 : 2;//FLATPICKER DEFAULTS
    // ZA sidebar koji se nalazi u content/header/
    let mySidebar = document.getElementById("mySidebar");

    const w3_open = () => {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
    // Close the sidebar with the close button
    const w3_close = () => {
        mySidebar.style.display = "none";
    }
    // END SIDEBAR

    // TOP ILI BOTTOM SLIDESHOW TEXT FADE IN OUT
    const fadeOutText = () => {
      const textElements = document.querySelectorAll('.fade-text');
      textElements.forEach(element => {
        element.classList.add('fade-out');
      });
    }
    const fadeInText = () => {
      const textElements = document.querySelectorAll('.fade-text');
      textElements.forEach(element => {
        element.classList.remove('fade-out');
        element.classList.add('fade-in');
      });
    }
    // END TOP SLIDESHOW TEXT FADE IN OUT
    // SELEKTOR ZA DATUME NA MODALU OBJEKTI TODO
    const getEventsByDate = () => {

    }
    async function initFlatpickr() {
      let disabledDates = await getEventsByDate();
      flatpickr("#datePicker", {
        locale: "hr",
        mode: "range",
        showMonths: showMonths,
        minDate: "today",
        altInput: true,
        altFormat: "j. F, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
        if (selectedDates.length === 2) {
          const bookingData = {
            dateRange: dateStr
          };
          console.log(bookingData)
        }
      },
      });
    }
    // END SELEKTORA ZA DATUME
    const contentSwitch = (modalId) => {
      document.getElementById(modalId).style.display = 'block';
    }
    // ZA SPORTSKE DOGAĐAJE BLOCK BUILDER
    const buildEventContent = (ev, buildWhere, currentPage = 1, itemsPerPage = 10) => {
      const startIndex = (currentPage - 1) * itemsPerPage;
      const endIndex = startIndex + itemsPerPage;
      const paginatedEvents = ev.slice(startIndex, endIndex);
      document.getElementById(buildWhere).innerHTML = '';
      paginatedEvents.forEach(e => {
        const eventBlock = document.createElement('div');
        const [day, month, year] = e.eventDate.split('.');
        const formattedDate = `${year}${month.padStart(2, '0')}${day.padStart(2, '0')}T000000`;
        eventBlock.className = 'w3-panel w3-scrollers w3-leftbar w3-rightbar w3-border-black w3-margin-top';
        eventBlock.innerHTML = `
          <header class="w3-container">
            <h2>${e.eventDate}</h2>
            <h3>${e.eventNameDesc}</h3>
            <div class="reminder-icon">
              <div class="w3-center" onclick="popup.style.display = 'block';setReminderEvent(this)" title="Dodaj podsjetnik">🕒</div>
              <div class="w3-center" title="Dodaj u Google kalendar">
                <a title="Dodaj u Google kalendar" href="https://calendar.google.com/calendar/r/eventedit?text=${encodeURIComponent(e.eventNameDesc)}&dates=${formattedDate}/${formattedDate}&details=${encodeURIComponent(e.eventNameDesc)}&location=${encodeURIComponent(e.locationTag)}" target="_blank" rel="noopener noreferrer" >
                  📅
                </a>
              </div>
            </div>
            <div class="w3-right">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
              <i class="fa fa-instagram w3-hover-opacity"></i>
              <i class="fa fa-snapchat w3-hover-opacity"></i>
              <i class="fa fa-pinterest-p w3-hover-opacity"></i>
              <i class="fa fa-twitter w3-hover-opacity"></i>
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
        </header>`;
        document.getElementById(buildWhere).appendChild(eventBlock);
      });

      // Create pagination links
      const totalPages = Math.ceil(ev.length / itemsPerPage);
      const paginationLinks = document.createElement('div');
      paginationLinks.className = 'pagination-links w3-bar w3-center w3-paper';
      const descriptivetext = document.createElement('span');
      descriptivetext.innerText = 'Stranica: ';
      paginationLinks.appendChild(descriptivetext);
      for (let i = 1; i <= totalPages; i++) {
        const link = document.createElement('a');
        link.href = 'javascript:void(0)';
        link.textContent = i;
        i == currentPage ? link.className = 'w3-button w3-underline w3-sand':link.className = 'w3-button';
        link.onclick = () => {
            buildEventContent(ev, buildWhere, i, itemsPerPage);
            document.getElementById('events').scrollIntoView({ behavior: 'smooth' });
        };
        paginationLinks.appendChild(link);
      }

      document.getElementById(buildWhere).appendChild(paginationLinks);
    };
    // FILTRIRANJA EVENATA
    const filterEvents = (ev) => {
      const filterWhere = ev.getAttribute("data-filter-id");
      const eventBlocks = document.getElementById(filterWhere).querySelectorAll(`.w3-panel.w3-scrollers.w3-leftbar.w3-rightbar.w3-border-black.w3-margin-top`);
      if( ev.value.length > 2 ){
        const input = ev.value.toLowerCase();
        eventBlocks.forEach(block => {
          const eventName = block.querySelector('h3').innerText.toLowerCase();
          if (eventName.includes(input)) {
            block.style.display = 'block';
          } else {
            block.style.display = 'none';
          }
        });
      } else {
        eventBlocks.forEach(block => {
          block.style.display = 'block';
        });
      }
    }
    // NAKON KLIKA NA OBJEKT KREIRANJE SADRŽAJA MODALA OBJEKTI
    const beforeObjektiModalOpen = (el) => {
      const imgSrc = el.querySelector('img.property-img').src;
      const objectLocation = el.querySelector('h3').innerHTML;
      document.getElementById('objectImg').src = imgSrc;
      document.getElementById('objectName').innerHTML = objectLocation;
      const currentMonth = new Date().getMonth() + 1; // get the current month (1-12)
      const filteredEvents = main_Object.events.filter((event) => {
        return event.eventMonth === currentMonth.toString().padStart(2, '0') && event.locationTag === 'RSC Jarun';;
      });
      buildEventContent(filteredEvents, 'objectEvents',1 ,10);
      document.getElementById('objektiModal').style.display='block';
      initFlatpickr();
    }
    const parseDateRange = (dateStr) => {
        const [start, end] = dateStr.split(' to ').map(date => new Date(date));
        const dateArray = [];
        let currentDate = start;

        while (currentDate <= end) {
            const day = String(currentDate.getDate()).padStart(2, '0');
            const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero-based
            const year = currentDate.getFullYear();
            dateArray.push(`${day}.${month}.${year}.`);
            currentDate.setDate(currentDate.getDate() + 1);
        }

        return dateArray;
    }
    flatpickr("#mainDatePicker", {
        locale: "hr",
        mode: "range",
        showMonths: showMonths,
        minDate: "today",
        altInput: true,
        altFormat: "j. F, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
        if (selectedDates.length === 2) {
          const dateArray = parseDateRange(dateStr);
          const filteredEvents = main_Object.events.filter(event => dateArray.includes(event.eventDate));
          buildEventContent(filteredEvents, 'eventsEvents', 1, 10);
        }
      },
      });
    // END FILTRIRANJA EVENATA
    // SOCIAL SHARES NA DNU STRANICE
    document.querySelectorAll('.socialsShares').forEach(icon => {
        icon.addEventListener('click', function() {
        const urlToShare = encodeURIComponent(window.location.href);
        const title = encodeURIComponent(document.title);
        let shareUrl = '';

        switch (this.id) {
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${urlToShare}`;
            break;
        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?url=${urlToShare}&text=${title}`;
            break;
        case 'linkedin':
            shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${urlToShare}&title=${title}`;
            break;
        case 'pinterest':
            shareUrl = `https://pinterest.com/pin/create/button/?url=${urlToShare}&description=${title}`;
            break;
        case 'snapchat':
            // Snapchat doesn't have a direct share URL, but you can redirect to the Snapchat app or website
            alert('Unsupported via URL.');
            return;
        case 'instagram':
            // Instagram doesn't support direct URL sharing
            alert('Unsupported via URL.');
            return;
        default:
            return;
        }

        window.open(shareUrl, '_blank', 'noopener,noreferrer');
        });
    });