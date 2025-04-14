  const image = document.querySelector('img[usemap="#image-map"]');
  const map = document.querySelector('map[name="image-map"]');

  const drawClickedArea = (area) => {
    console.log('drawClickedArea called');
    const coords = area.getAttribute('coords').split(',').map(Number);
    const minX = Math.min(...coords.filter((_, index) => index % 2 === 0));
    const minY = Math.min(...coords.filter((_, index) => index % 2 !== 0));
    const maxX = Math.max(...coords.filter((_, index) => index % 2 === 0));
    const maxY = Math.max(...coords.filter((_, index) => index % 2 !== 0));

    // Get the image's offset from the top
    const imageRect = image.getBoundingClientRect();
    const imageTopOffset = imageRect.top;

    const canvas = getOrCreateCanvas(minX, minY + imageTopOffset, maxX - minX, maxY - minY);
    const ctx = canvas.getContext('2d');
    const clickedColor = 'rgba(255, 0, 0, 0.5)'; // Red

    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = clickedColor;
    ctx.beginPath();
    ctx.moveTo(coords[0] - minX, coords[1] - minY);
    for (let i = 2; i < coords.length; i += 2) {
      ctx.lineTo(coords[i] - minX, coords[i + 1] - minY);
    }
    ctx.closePath();
    ctx.fill();
  }

  const getOrCreateCanvas = (x, y, width, height) => {
    console.log('getOrCreateCanvas called');
    const existingCanvas = document.querySelector('canvas');
    // if (existingCanvas) {
    //   existingCanvas.style.left = `${x}px`;
    //   existingCanvas.style.top = `${y}px`;
    //   existingCanvas.width = width;
    //   existingCanvas.height = height;
    //   return existingCanvas;
    // }
    const newCanvas = document.createElement('canvas');
    newCanvas.style.position = 'absolute';
    newCanvas.style.left = `${x}px`;
    newCanvas.style.top = `${y}px`;
    newCanvas.width = width;
    newCanvas.height = height;
    document.body.appendChild(newCanvas);
    console.log('New canvas created');
    return newCanvas;
  }
  // Add an event listener to the map
  map.addEventListener('click', (event) => {
    console.log(event.target.tagName);
    if (event.target.tagName === 'AREA') {
      drawClickedArea(event.target);
    }
  });
      // close map modal and remove canvas if there
    const closeMap = (el) => {
      el.parentElement.style.display = 'none';
      const canvas = document.querySelector('canvas');
      if (canvas) {
        canvas.remove();
      }
    }