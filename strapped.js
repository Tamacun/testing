  
/// Hide/show stream logo, and cover -- Show video player on click ///
$(document).ready(function(){
    $(".r1").click(function(){
        $(".v1").toggle();
        $(".b1").toggle();
        $('.p1').toggle();
    })
})

$(document).ready(function(){
    $(".r2").click(function(){
        $(".v2").toggle();
        $(".b2").toggle();
        $('.p2').toggle();
    })
})

$(document).ready(function(){
    $(".r3").click(function(){
        $(".v3").toggle();
        $(".b3").toggle();
        $('.p3').toggle();
    })
})

$(document).ready(function(){
    $(".r4").click(function(){
        $(".v4").toggle();
        $(".b4").toggle();
        $('.p4').toggle();
    })
})

$(document).ready(function(){
    $(".r5").click(function(){
        $(".v5").toggle();
        $(".b5").toggle();
        $('.p5').toggle();
    })
})

$(document).ready(function(){
    $(".r6").click(function(){
        $(".v6").toggle();
        $(".b6").toggle();
        $('.p6').toggle();
    })
})

$(document).ready(function(){
    $(".r7").click(function(){
        $(".v7").toggle();
        $(".b7").toggle();
        $('.p7').toggle();
    })
})

$(document).ready(function(){
    $(".r8").click(function(){
        $(".v8").toggle();
        $(".b8").toggle();
        $('.p8').toggle();
    })
})

$(document).ready(function(){
    $(".r9").click(function(){
        $(".v9").toggle();
        $(".b9").toggle();
        $('.p9').toggle();
    })
})

$(document).ready(function(){
    $(".r10").click(function(){
        $(".v10").toggle();
        $(".b10").toggle();
        $('.p10').toggle();
    })
})

$(document).ready(function(){
    $(".r11").click(function(){
        $(".v11").toggle();
        $(".b11").toggle();
        $('.p11').toggle();
    })
})

$(document).ready(function(){
    $(".r12").click(function(){
        $(".v12").toggle();
        $(".b12").toggle();
        $('.p12').toggle();
    })
})

var links = [
                "lirik",
                "shortyyguy",
                'timthetatman',
                'summit1g',
                'unitlost'
                ]

///Psuedo random link generator ///
function randomlink(){
window.location= 'https://twitch.tv/' + links[Math.floor(Math.random()*links.length)]
}


/// shopify button ///

function showBuy(){
$('.buy-btn').toggle();
}

/// Copied from Shopify ///

/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'tamacun.myshopify.com',
      apiKey: 'a79a75a7e2f8ceca8f0a4b0cf3bafc15',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [9046665481],
        node: document.getElementById('product-component-afa97577e5b'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "buttonDestination": "checkout",
    "variantId": "all",
    "width": "240px",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "BUY NOW"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "title": {
        "font-size": "26px"
      },
      "price": {
        "font-size": "18px"
      },
      "compareAt": {
        "font-size": "15px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/



/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'tamacun.myshopify.com',
      apiKey: 'a79a75a7e2f8ceca8f0a4b0cf3bafc15',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [9046726281],
        node: document.getElementById('product-component-12404dea423'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "buttonDestination": "checkout",
    "variantId": "all",
    "width": "240px",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "BUY NOW"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "title": {
        "font-size": "26px"
      },
      "price": {
        "font-size": "18px"
      },
      "compareAt": {
        "font-size": "15px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/


/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'tamacun.myshopify.com',
      apiKey: 'a79a75a7e2f8ceca8f0a4b0cf3bafc15',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [9046728201],
        node: document.getElementById('product-component-69b438f4a27'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "buttonDestination": "checkout",
    "variantId": "all",
    "width": "240px",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "BUY NOW"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "title": {
        "font-size": "26px"
      },
      "price": {
        "font-size": "18px"
      },
      "compareAt": {
        "font-size": "15px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#6f80a3",
        ":hover": {
          "background-color": "#647393"
        },
        ":focus": {
          "background-color": "#647393"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/