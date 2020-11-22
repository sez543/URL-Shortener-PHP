// define a dependency bundle and execute code when it loads
loadjs(
  ["static_scripts/dark_mode.js", "static_scripts/form_validation.js"],
  "scripts"
);

loadjs.ready("scripts", function () {});
