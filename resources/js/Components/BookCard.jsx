import React from 'react';

const BookCard = ({ book }) => {
  return (
    <div className="book-card mb-2 border-bottom bg-green-100 p-5 rounded">
      <img src={book.cover_image} alt={book.title} />
      <h2>Title: {book.title}</h2>
      <p>Written By: {book.writer.name}</p>
      <p>Tags: #{book.tags.join(', #')}</p>
      <p>Created At: {book.created_at}</p>
      <p>Updated At: {book.updated_at}</p>
    </div>
  );
};

export default BookCard;
