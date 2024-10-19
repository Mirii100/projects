<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>About</title>
</head>
<body>

<div class="container" id="boxes-container">
    <!-- Individual boxes with images will be generated here -->
</div>

<script>
    // Array of images and titles
    const boxes = [
        { src: 'image1.jpg', title: 'Container 1', details: 'More details about Container 1.' },
        { src: 'image2.jpg', title: 'Container 2', details: 'More details about Container 2.' },
        { src: 'image3.jpg', title: 'Container 3', details: 'More details about Container 3.' },
        { src: 'image4.jpg', title: 'Container 4', details: 'More details about Container 4.' },
        { src: 'image5.jpg', title: 'Container 5', details: 'More details about Container 5.' },
        { src: 'image6.jpg', title: 'Container 6', details: 'More details about Container 6.' },
        { src: 'image7.jpg', title: 'Container 7', details: 'More details about Container 7.' },
        { src: 'image8.jpg', title: 'Container 8', details: 'More details about Container 8.' },
        { src: 'image9.jpg', title: 'Container 9', details: 'More details about Container 9.' },
        { src: 'image10.jpg', title: 'Container 10', details: 'More details about Container 10.' },
        { src: 'image11.jpg', title: 'Container 11', details: 'More details about Container 11.' },
        { src: 'image12.jpg', title: 'Container 12', details: 'More details about Container 12.' },
    ];

    // Generate boxes dynamically
    const container = document.getElementById('boxes-container');
    boxes.forEach(box => {
        const boxElement = document.createElement('a');
        boxElement.className = 'box';
        boxElement.href = '#';
        boxElement.onclick = (event) => expandImage(event);

        const imgElement = document.createElement('img');
        imgElement.src = box.src;
        imgElement.alt = box.title;
        imgElement.className = 'box-image';

        const contentDiv = document.createElement('div');
        contentDiv.className = 'box-content';

        const titleElement = document.createElement('h4');
        titleElement.textContent = box.title;

        const moreContentDiv = document.createElement('div');
        moreContentDiv.className = 'more-content';
        moreContentDiv.textContent = box.details;

        contentDiv.appendChild(titleElement);
        contentDiv.appendChild(moreContentDiv);
        boxElement.appendChild(imgElement);
        boxElement.appendChild(contentDiv);
        container.appendChild(boxElement);
    });

    function expandImage(event) {
        const box = event.currentTarget;
        const moreContent = box.querySelector('.more-content');
        if (box.classList.contains('expanded')) {
            box.classList.remove('expanded');
            moreContent.style.display = 'none'; // Hide additional content
        } else {
            box.classList.add('expanded');
            moreContent.style.display = 'block'; // Show additional content
        }
    }
</script>

</body>
</html>

