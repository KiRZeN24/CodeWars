function alphanumeric(string) {
  let pass = /^[a-zA-Z0-9]+$/;

  return pass.test(string);
}