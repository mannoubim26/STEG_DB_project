<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>My Blog</title>

    <style>
body {
  font-family: sans-serif;
  background: #000;
}

h1 {
  text-align: center;
  color: #fff;

}

form {
  margin-bottom: 1em;

}

label {
  display: block;
  margin-bottom: 0.5em;
  color: white;

}

textarea {
  display: block;
  width: 100%;
  height: 10em;
  margin-bottom: 1em;
}

button {
  background: var(--color-primary);
  background: rgba(39, 167, 118, 0.8);
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
  margin-right: 10px; /* Add margin between buttons */
}

button:hover {
  background-color: rgba(39, 167, 118, 1);
}

.post {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;
  padding: 10px;
  margin-bottom: 10px;
}
#post-form input[type="text"], #post-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;
  padding: 10px;
  margin-bottom: 10px;
}

.post-title {
  font-weight: bold;
  color: white;

}

.post-date {
  font-style: italic;
  color: #666;
}

.post-likes {
  margin-top: 0.5em;
  color: #666;
}

.liked {
  color: red;
}
title {
  color: #fff;
}

textarea {
    border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;

}
input[type="text"] {

  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;


}


.btn {
  background: var(--color-primary);
  background: rgba(39, 167, 118, 0.8);
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px; 
}


    </style>
  </head>

  <body>
    <h1>My Blog</h1>

    <!-- Form to create new posts -->
    <form id="post-form">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required>

      <label for="content">Content:</label>
      <textarea id="content" name="content" required></textarea>

      <!-- <label for="date">Date:</label>
      <input type="date" id="date" name="date" required> -->

      <button type="submit">Create Post</button>
    </form>

    <!-- Container for posts -->
    <div id="posts-container"></div>

    <script>
const postForm = document.getElementById('post-form');
const postsContainer = document.getElementById('posts-container');

postForm.addEventListener('submit', event => {
  // Prevent default form submission
  event.preventDefault();

  // Get form data
  const title = postForm.elements.title.value;
  const content = postForm.elements.content.value;
  
  // Create new date object
  const date = new Date();

  // Create new post element
  const post = document.createElement('div');
  post.className = 'post';

  const titleElement = document.createElement('h2');
  titleElement.className = 'post-title';
  titleElement.textContent = title;
  post.appendChild(titleElement);

  const contentElement = document.createElement('p');
  contentElement.textContent = content;
  post.appendChild(contentElement);

  const dateElement = document.createElement('p');
  dateElement.className = 'post-date';
  dateElement.textContent = date.toLocaleDateString();
  post.appendChild(dateElement);

  const likesElement = document.createElement('p');
  likesElement.className = 'post-likes';
  likesElement.innerHTML = '<button class="like-button">Like</button> <span class="like-count">0</span>';
  post.appendChild(likesElement);

  // Create new comments section
  const commentsElement = document.createElement('div');
  commentsElement.className = 'post-comments';
  commentsElement.innerHTML = '<input type="text" class="comment-input" placeholder="Add a comment"><button class="comment-button">Post</button><ul class="comment-list"></ul>';
  post.appendChild(commentsElement);

  // Add update button
  const updateButton = document.createElement('button');
  updateButton.className = 'update-button';
  updateButton.textContent = 'Update';
  post.appendChild(updateButton);

  // Add new post to container
  postsContainer.appendChild(post);

  // Add event listener for like button
  const likeButton = likesElement.querySelector('.like-button');
  const likeCount = likesElement.querySelector('.like-count');
  likeButton.addEventListener('click', () => {
    let count = parseInt(likeCount.textContent);
    count++;
    likeCount.textContent = count;
  });

  // Add event listener for comment button
  const commentButton = commentsElement.querySelector('.comment-button');
  const commentInput = commentsElement.querySelector('.comment-input');
  const commentList = commentsElement.querySelector('.comment-list');
  commentButton.addEventListener('click', () => {
    const commentText = commentInput.value;
    if (commentText !== '') {
      const commentItem = document.createElement('li');
      commentItem.textContent = commentText;
      commentList.appendChild(commentItem);
      commentInput.value = '';
    }
  });
    // Add delete button to post
    const deleteButton = document.createElement('button');
  deleteButton.className = 'delete-button';
  deleteButton.textContent = 'Delete';
  post.appendChild(deleteButton);
  deleteButton.addEventListener('click', () => {
    post.remove();
  });

  // Add event listener for update button
  updateButton.addEventListener('click', () => {
    const newTitle = prompt('Enter new title:');
    const newContent = prompt('Enter new content:');
    titleElement.textContent = newTitle;
    contentElement.textContent = newContent;
  });
});






    </script>
  </body>
</html>

