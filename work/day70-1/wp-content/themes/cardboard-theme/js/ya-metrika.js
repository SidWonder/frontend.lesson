//Yandex.Metrika counter

(function(m, e, t, r, i, k, a) {
  m[i] =
    m[i] ||
    function() {
      (m[i].a = m[i].a || []).push(arguments);
    };
  m[i].l = 1 * new Date();
  (k = e.createElement(t)),
    (a = e.getElementsByTagName(t)[0]),
    (k.async = 1),
    (k.src = r),
    a.parentNode.insertBefore(k, a);
})(
  window,
  document,
  "script",
  "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js",
  "ym"
);
ym(57373428, "init", {
  clickmap: true,
  trackLinks: true,
  accurateTrackBounce: true,
  webvisor: true,
  trackHash: true
});
