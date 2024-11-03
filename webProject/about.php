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


<script >
       
    // Array of images and titles
    const boxes = [
        { src: 'image1.jpg', title: 'Alexander Njuguna Mirii', details: 'senior softwre engineer.' },
        { src: 'image2.jpg', title: 'Njuguna Miri', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image3.jpg', title: 'Njuguna Miri', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Njuguna Miri', details: 'More details about Container 4.' },
        { src: 'image2.jpg', title: 'Mirii', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Mirii', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Mirii', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Alexander', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Alexander', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Alexander', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Alexander', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
        { src: 'image2.jpg', title: 'Alex', details: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti veritatis qui, porro dolore eius sequi repudiandae at accusantium praesentium necessitatibus aliquam nesciunt atque libero pariatur ipsam facere eos ipsa nam!' },
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

