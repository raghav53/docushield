function toggleActive(e) {
    var tab = e.currentTarget;
    var currentActiveTab = document.querySelector('li.active');
    
    if (currentActiveTab !== tab) {
      var activeTabHash = currentActiveTab.firstChild.getAttribute('href');
      var currentActiveContent = document.querySelector(activeTabHash);
      
      var tabHash= tab.firstChild.getAttribute('href');
      var tabContent = document.querySelector(tabHash); 
      
      currentActiveTab.classList.remove('active');
      tab.classList.add('active');
      currentActiveContent.classList.remove('active');
      tabContent.classList.add('active');
    }
  }
  
  var tabNodes = document.querySelectorAll('.tab-links > li');
  for (var i = 0; i < tabNodes.length; i++) {
    tabNodes[i].addEventListener('click', toggleActive, false);
  }
  
  