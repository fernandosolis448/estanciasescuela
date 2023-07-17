let commentCount = 0;
const commentButton = document.getElementById('comment-button');
const commentCountElement = document.getElementById('comment-count');

commentButton.addEventListener('click', () => {
  commentCount++;
  commentCountElement.textContent = commentCount;
});
  