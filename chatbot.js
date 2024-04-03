
  window.watsonAssistantChatOptions = {
    integrationID: "35e690ed-3aa2-469c-ba34-cc0ade606e9f", // The ID of this integration.
    region: "au-syd", // The region your integration is hosted in.
    serviceInstanceID: "ac85c7d8-209f-44db-b731-1f5a6d48eb6e", // The ID of your service instance.
    onLoad: async (instance) => { await instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
