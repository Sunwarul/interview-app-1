import React from 'react';

const BookCard = ({ book }) => {
  return (
    <div className="book-card">
      <img src={book.cover_image} alt={book.title} />
      <h2>{book.title}</h2>
      <p>By: {book.writer.name}</p>
      <p>Tags: {book.tags.join(', ')}</p>
      <p>Created At: {book.created_at}</p>
      <p>Updated At: {book.updated_at}</p>
    </div>
  );
};

export default BookCard;
