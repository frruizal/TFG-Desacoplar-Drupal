#Obtener todos los nodos

query{
  nodeQuery{
    entities{
      ... on NodeArticle {
        title
        body{
          value
          format
        }
      }
    }
  }
}
