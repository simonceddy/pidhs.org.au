module.exports = {
    "env": {
        "browser": true,
        "es6": true
    },
    "extends": [
        "plugin:react/recommended",
        "airbnb"
    ],
    "globals": {
        "Atomics": "readonly",
        "SharedArrayBuffer": "readonly"
    },
    "parserOptions": {
        "ecmaFeatures": {
            "jsx": true
        },
        "ecmaVersion": 2018,
        "sourceType": "module"
    },
    "plugins": [
        "react"
    ],
    "rules": {
      "no-console": "off",
      "linebreak-style": "off",
      "comma-dangle": "off",
      "react/jsx-filename-extension": [1, { "extensions": [".js", ".jsx"] }],
      "react/jsx-one-expression-per-line": "off",
      "react/destructuring-assignment": "off",
      "react/prop-types": "off",
      "import/no-extraneous-dependencies": "off"
    }
};