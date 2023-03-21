let articleContentTitles = $(".articleContent h2");
let articleNavigationObject = $(".articleNavigation ul");

function removeSpecialCharactersFromTitle(title) {
  return title.replace(/[^a-zA-Z ]/g, "")
}

function createIdFromTitle(title) {
  let titleId = title.toLowerCase();
  titleId = titleId.replace(/ /g, "_");
  return titleId;
}

function generateNavForTitle(title, titleId) {
  return '<li><a href="#' + titleId + '">' + title + "</a></li>";
}

let currentTitleIndex = 0;
articleContentTitles.each(function () {
  let title = $(this).text();
  let listTitle = removeSpecialCharactersFromTitle(title);
  let titleId = createIdFromTitle(listTitle);

  //putting id to titles
  $(this).attr("id", titleId);

  //generating titles nav with id
  articleNavigationObject.append(generateNavForTitle(title, titleId));

  //getIndexOfCurrentTitleAfterLoad
  if ($(window).scrollTop() > $(this).offset().top) {
    currentTitleIndex += 1;
  }
});

//setActiveTitleAfterLoad
$(".articleNavigation li").eq(currentTitleIndex).addClass("active");
//adding active marker
$(".articleNavigation").append('<div class="articleNavigationArrow"></div>');

//update marker position
function calculateAndSetMarkerTopPosition(targetTitle) {
  let previousTitlesHeight = 0;
  $(".articleNavigation li").each(function (i) {
    if (i < targetTitle.index()) {
      previousTitlesHeight += $(this).height();
    }
  });

  const listItemMargin = 24,
    ulPadding = 36,
    markerAlign = 3;
  let topValue =
    ulPadding +
    targetTitle.index() * listItemMargin +
    previousTitlesHeight +
    (targetTitle.height() - 9) / 2 -
    markerAlign;

  $(".articleNavigationArrow").css("top", topValue + "px");
}

calculateAndSetMarkerTopPosition($(".articleNavigation li.active"));

let scroll = $(this).scrollTop();

$(window).scroll(function () {
  let currentTitle = $(".articleNavigation li.active");

  if (scroll > $(this).scrollTop()) {
    //if scrolling up
    let prevTitle = $(".articleNavigation li.active").prev(),
      prevTitleObj = prevTitle.children().attr("href");

    if (prevTitle.length) {
      if ($(this).scrollTop() < $(prevTitleObj).offset().top) {
        currentTitle.removeClass("active");
        prevTitle.addClass("active");

        calculateAndSetMarkerTopPosition(prevTitle);
      }
    }
  } else {
    //if scrolling down
    let currentTitleObj = currentTitle.children().attr("href"),
      nextTitle = $(".articleNavigation li.active").next();

    if (nextTitle.length) {
      if ($(this).scrollTop() > $(currentTitleObj).offset().top) {
        currentTitle.removeClass("active");
        nextTitle.addClass("active");

        calculateAndSetMarkerTopPosition(nextTitle);
      }
    }
  }
  scroll = $(this).scrollTop();
});

$(document).on("click", ".articleNavigation li a", function (e) {
  e.preventDefault();

  $(this).parent().siblings("li.active").removeClass("active");
  $(this).parent().addClass("active");

  calculateAndSetMarkerTopPosition($(this).parent());

  const titleMarginTop = 16;
  $("html, body").animate(
    {
      scrollTop: $($(this).attr('href')).offset().top - titleMarginTop
    },
    500
  );

  return false;
});