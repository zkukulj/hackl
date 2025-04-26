const getVisibleScrollers = () => {
  const scrollers = document.getElementsByClassName("topScrollers");
  return Array.prototype.filter.call(scrollers, (scroller) => {
    return scroller.offsetParent !== null;
  });
};

const showCurrentGroup = (currentGroup, visibleScrollers, isFirstIteration) => {
  visibleScrollers.forEach((scroller, index) => {
    console.log("scroller", scroller);
    console.log("currentGroup", currentGroup);
    const data = JSON.parse(JSON.stringify(currentGroup[index]));
    const eventNameDesc = data.eventNameDesc;
    const eventDate = data.eventDate;
    const locationTag = data.locationTag;

    if (!isFirstIteration) {
      fadeOutText();
      setTimeout(() => {
        scroller.querySelector(".scrollPlace").innerHTML = locationTag;
        scroller.querySelector(".scrollEvent").innerHTML = eventNameDesc;
        scroller.querySelector(".scrollDate").innerHTML = eventDate;
        fadeInText();
      }, 2000);
    } else {
      scroller.querySelector(".scrollPlace").innerHTML = locationTag;
      scroller.querySelector(".scrollEvent").innerHTML = eventNameDesc;
      scroller.querySelector(".scrollDate").innerHTML = eventDate;
    }
  });
};

const groupData = (data, numVisibleScrollers) => {
  console.log("groupData", data);
  const groupedData = [];
  for (let i = 0; i < data.length; i += numVisibleScrollers) {
    groupedData.push(data.slice(i, i + numVisibleScrollers));
  }
  return groupedData;
};

const loopScrollers = (data) => {
  const visibleScrollers = getVisibleScrollers();
  const numVisibleScrollers = visibleScrollers.length;
  const groupedData = groupData(data, numVisibleScrollers);

  let currentIndex = 0;
  let isFirstIteration = true;
  const currentGroups = groupedData.slice(currentIndex, currentIndex + 1);
  const currentGroup = currentGroups[0];
  // sending first batch right away
  showCurrentGroup(currentGroup, visibleScrollers, isFirstIteration);
  isFirstIteration = false;

  const intervalId = setInterval(() => {
    // Move to the next set of groups
    currentIndex = (currentIndex + 1) % groupedData.length;
    const currentGroups = groupedData.slice(currentIndex, currentIndex + 1);
    const currentGroup = currentGroups[0];

    if (currentGroup.length < numVisibleScrollers) {
      // If there are not enough items to fill the available space,
      // repeat the last item to fill the space
      const lastItem = currentGroup[currentGroup.length - 1];
      while (currentGroup.length < numVisibleScrollers) {
        currentGroup.push(lastItem);
      }
    }
    showCurrentGroup(currentGroup, visibleScrollers, isFirstIteration);
  }, 15000); // adjust the interval time as needed
};
