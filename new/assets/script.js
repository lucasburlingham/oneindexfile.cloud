function toggleShowPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function copyLink() {
  var directory = document.getElementById("directory").value;
  var host = document.getElementById("host").innerText;
  var link = host + directory;
  var copyButton = document.getElementById("copyButton");
  copyButton.innerText = "Copied!";
  copyButton.classList.add("btn-success");
 
  
  const type = "text/plain";
  const blob = new Blob([link], { type });
  const data = [new ClipboardItem({ [type]: blob })];

  navigator.clipboard.write(data).then(
    () => {
      /* Success */
      console.log("Copied using clipboard API");
    },
    () => {
      /* Failure */
      console.log("Not copied using clipboard API, trying execCommand and hidden element");
      hiddenElement = document.createElement("textarea");
      hiddenElement.value = link;
      document.body.appendChild(hiddenElement);
      hiddenElement.select();
      document.execCommand("copy");
      document.body.removeChild(hiddenElement);
    }
  );
}