import { readFileSync } from 'fs';
import { resolve } from 'path';

export default {
  devServer: {
    https: {
      key: readFileSync(resolve('localhost.key')),
      cert: readFileSync(resolve('localhost.crt')),
    },
    // outras configurações do devServer, se necessário
  },
};
