function confirmDeleteComment(idArticle, idComment) {
  if (confirm('Apakah kamu yakin menghapus komentar ini?'))
    location.href = `./model/comment.php?delete=true&idArticle=${idArticle}&idComment=${idComment}`;
}

function confirmDeleteArticle(id) {
  if (confirm('Apakah kamu yakin menghapus artikel ini?'))
    location.href = `./model/article.php?delete=true&id=${id}`;
}
