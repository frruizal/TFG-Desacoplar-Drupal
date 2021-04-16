FROM node:12.13.0
  WORKDIR /home/fruizalejos/Documentos/workflow/tfgFrancisco_Drupal/tfgFrancisco_Drupal/sitio_incremental
  COPY package*.json ./
  RUN npm install
  RUN yarn global add gatsby-cli
  RUN yarn
  COPY . .
  EXPOSE 3000
  CMD [ "node", "index.js" ]
