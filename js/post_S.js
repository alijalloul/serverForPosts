let counter = 1;

const post_btn = document.getElementById('post_btn');

post_btn.addEventListener('click', () => {
    let newPost = document.createElement('div');
    newPost.classList.add("post");
    newPost.style.marginTop = 450*counter + 'px';
    counter++;
    document.body.appendChild(newPost);

    let newUploade = document.createElement('h5');
    newUploade.classList.add("post_uploade");
    let currentDate = new Date();
    let month = currentDate.getMonth();
    let day = currentDate.getDay();
    let year = currentDate.getFullYear();
    let hours = currentDate.getHours();
    let minutes = currentDate.getMinutes();
    let ampm = hours >= 12 ? 'pm' : 'am';
    month = month < 10 ? '0'+month : month;
    day = day < 10 ? '0'+day : day;
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;

    let date = month +
            "/"+day +
            "/"+year+
            " "+hours +
            ":"+minutes +
            " "+ampm;
    newUploade.innerHTML = date;
                        
    newPost.appendChild(newUploade);

    let newTitle = document.createElement('h1');
    newTitle.classList.add("post_title");
    newTitle.innerHTML = document.getElementById('title-input').value;
    newPost.appendChild(newTitle);
    
    let newContent = document.createElement('p');
    newContent.classList.add("post_content");
    newContent.innerHTML = document.getElementById('content-input').value;
    newPost.appendChild(newContent);

    let newRemove = document.createElement('button');
    newRemove.classList.add("remove-post-btn");
    newRemove.innerHTML = "REMOVE";
    newPost.appendChild(newRemove);    
});