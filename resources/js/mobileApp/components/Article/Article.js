import React from 'react';

const Article = (props) => {
  let article = props.article || {};
  return (
    <div>
      <h1>{article.title}</h1>
      <span>Last updated on {article.updatedOn}</span>
      <p>Html content</p>
    </div>
  );
};

export default Article;