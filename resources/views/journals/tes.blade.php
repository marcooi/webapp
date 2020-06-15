<html lang="id" class="">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <script type="text/javascript" async="" src="https://widget.intercom.io/widget/yhxmtksi"></script>
    <script src="https://js-agent.newrelic.com/nr-1169.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-W23JLJG"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NM8LB4L"></script>
    <script async="" src="//connect.facebook.net/en_US/fbevents.js"></script>
    <script>
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "a620b89621",
            "applicationID": "9596944",
            "transactionName": "elwLFUpdCggEFEkVQUtQDQBLVzkUAB8LAFpNQEoEXFsS",
            "queueTime": 0,
            "applicationTime": 241,
            "agent": ""
        }
    </script>
    <script>
        (window.NREUM || (NREUM = {})).loader_config = {
            xpid: "VQcGVV9UDRAJUVhUDgUD",
            licenseKey: "a620b89621",
            applicationID: "9596944"
        };
        window.NREUM || (NREUM = {}), __nr_require = function(t, n, e) {
            function r(e) {
                if (!n[e]) {
                    var o = n[e] = {
                        exports: {}
                    };
                    t[e][0].call(o.exports, function(n) {
                        var o = t[e][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[e].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < e.length; o++) r(e[o]);
            return r
        }({
            1: [function(t, n, e) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    } catch (n) {}
                }
                var o, i = t("ee"),
                    a = t(21),
                    s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                } catch (c) {}
                s.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function(t, n, e) {
                    r(e.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function(t, n) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, n, e) {
                function r(t, n, e, r, s) {
                    try {
                        p ? p -= 1 : o(s || new UncaughtException(t, n, e), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, n, e) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = n, this.line = e
                }

                function o(t, n) {
                    var e = n ? null : c.now();
                    i("err", [t, e])
                }
                var i = t("handle"),
                    a = t(22),
                    s = t("ee"),
                    c = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    l = "nr@seenError",
                    p = 0;
                c.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                } catch (h) {
                    "stack" in h && (t(9), t(8), "addEventListener" in window && t(5), c.xhrWrappable && t(10), d = !0)
                }
                s.on("fn-start", function(t, n, e) {
                    d && (p += 1)
                }), s.on("fn-err", function(t, n, e) {
                    d && !e[l] && (f(e, l, function() {
                        return !0
                    }), this.thrown = !0, o(e))
                }), s.on("fn-end", function() {
                    d && !this.thrown && p > 0 && (p -= 1)
                }), s.on("internal-error", function(t) {
                    i("ierr", [t, c.now(), !0])
                })
            }, {}],
            3: [function(t, n, e) {
                t("loader").features.ins = !0
            }, {}],
            4: [function(t, n, e) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee"),
                        i = t("handle"),
                        a = t(9),
                        s = t(8),
                        c = "learResourceTimings",
                        f = "addEventListener",
                        u = "resourcetimingbufferfull",
                        d = "bstResource",
                        l = "resource",
                        p = "-start",
                        h = "-end",
                        m = "fn" + p,
                        w = "fn" + h,
                        v = "bstTimer",
                        g = "pushState",
                        y = t("loader");
                    y.features.stn = !0, t(7), "addEventListener" in window && t(5);
                    var x = NREUM.o.EV;
                    o.on(m, function(t, n) {
                        var e = t[0];
                        e instanceof x && (this.bstStart = y.now())
                    }), o.on(w, function(t, n) {
                        var e = t[0];
                        e instanceof x && i("bst", [e, n, this.bstStart, y.now()])
                    }), a.on(m, function(t, n, e) {
                        this.bstStart = y.now(), this.bstType = e
                    }), a.on(w, function(t, n) {
                        i(v, [n, this.bstStart, y.now(), this.bstType])
                    }), s.on(m, function() {
                        this.bstStart = y.now()
                    }), s.on(w, function(t, n) {
                        i(v, [n, this.bstStart, y.now(), "requestAnimationFrame"])
                    }), o.on(g + p, function(t) {
                        this.time = y.now(), this.startPath = location.pathname + location.hash
                    }), o.on(g + h, function(t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + c] ? window.performance[f](u, function(t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["c" + c]()
                    }, !1) : window.performance[f]("webkit" + u, function(t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["webkitC" + c]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}],
            5: [function(t, n, e) {
                function r(t) {
                    for (var n = t; n && !n.hasOwnProperty(u);) n = Object.getPrototypeOf(n);
                    n && o(n)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, n) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    s = t("wrap-function")(a, !0),
                    c = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                n.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, n) {
                    var e = t[1],
                        r = c(e, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof e.handleEvent) return e.handleEvent.apply(e, arguments)
                            }
                            var n = {
                                object: t,
                                "function": e
                            } [typeof e];
                            return n ? s(n, "fn-", null, n.name || "anonymous") : e
                        });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            6: [function(t, n, e) {
                function r(t, n, e) {
                    var r = t[n];
                    "function" == typeof r && (t[n] = function() {
                        var t = i(arguments),
                            n = {};
                        o.emit(e + "before-start", [t], n);
                        var a;
                        n[m] && n[m].dt && (a = n[m].dt);
                        var s = r.apply(this, t);
                        return o.emit(e + "start", [t, a], s), s.then(function(t) {
                            return o.emit(e + "end", [null, t], s), t
                        }, function(t) {
                            throw o.emit(e + "end", [t], s), t
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(22),
                    a = t(21);
                n.exports = o;
                var s = window,
                    c = "fetch-",
                    f = c + "body-",
                    u = ["arrayBuffer", "blob", "json", "text", "formData"],
                    d = s.Request,
                    l = s.Response,
                    p = s.fetch,
                    h = "prototype",
                    m = "nr@context";
                d && l && p && (a(u, function(t, n) {
                    r(d[h], n, f), r(l[h], n, f)
                }), r(s, "fetch", c), o.on(c + "end", function(t, n) {
                    var e = this;
                    if (n) {
                        var r = n.headers.get("content-length");
                        null !== r && (e.rxSize = r), o.emit(c + "done", [null, n], e)
                    } else o.emit(c + "done", [t], e)
                }))
            }, {}],
            7: [function(t, n, e) {
                var r = t("ee").get("history"),
                    o = t("wrap-function")(r);
                n.exports = r;
                var i = window.history && window.history.constructor && window.history.constructor.prototype,
                    a = window.history;
                i && i.pushState && i.replaceState && (a = i), o.inPlace(a, ["pushState", "replaceState"], "-")
            }, {}],
            8: [function(t, n, e) {
                var r = t("ee").get("raf"),
                    o = t("wrap-function")(r),
                    i = "equestAnimationFrame";
                n.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            9: [function(t, n, e) {
                function r(t, n, e) {
                    t[0] = a(t[0], "fn-", null, e)
                }

                function o(t, n, e) {
                    this.method = e, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, e)
                }
                var i = t("ee").get("timer"),
                    a = t("wrap-function")(i),
                    s = "setTimeout",
                    c = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                n.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
            }, {}],
            10: [function(t, n, e) {
                function r(t, n) {
                    d.inPlace(n, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this,
                        n = u.context(t);
                    t.readyState > 3 && !n.resolved && (n.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, g, "fn-", s)
                }

                function i(t) {
                    y.push(t), h && (b ? b.then(a) : w ? w(a) : (E = -E, O.data = E))
                }

                function a() {
                    for (var t = 0; t < y.length; t++) r([], y[t]);
                    y.length && (y = [])
                }

                function s(t, n) {
                    return n
                }

                function c(t, n) {
                    for (var e in t) n[e] = t[e];
                    return n
                }
                t(5);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t("wrap-function")(u),
                    l = NREUM.o,
                    p = l.XHR,
                    h = l.MO,
                    m = l.PR,
                    w = l.SI,
                    v = "readystatechange",
                    g = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    y = [];
                n.exports = u;
                var x = window.XMLHttpRequest = function(t) {
                    var n = new p(t);
                    try {
                        u.emit("new-xhr", [n], n), n.addEventListener(v, o, !1)
                    } catch (e) {
                        try {
                            u.emit("internal-error", [e])
                        } catch (r) {}
                    }
                    return n
                };
                if (c(p, x), x.prototype = p.prototype, d.inPlace(x.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function(t, n) {
                        r(t, n), i(n)
                    }), u.on("open-xhr-start", r), h) {
                    var b = m && m.resolve();
                    if (!w && !m) {
                        var E = 1,
                            O = document.createTextNode(E);
                        new h(a).observe(O, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === v || a()
                })
            }, {}],
            11: [function(t, n, e) {
                function r(t) {
                    if (!i(t)) return null;
                    var n = window.NREUM;
                    if (!n.loader_config) return null;
                    var e = (n.loader_config.accountID || "").toString() || null,
                        r = (n.loader_config.agentID || "").toString() || null,
                        s = (n.loader_config.trustKey || "").toString() || null;
                    if (!e || !r) return null;
                    var c = a.generateCatId(),
                        f = a.generateCatId(),
                        u = Date.now(),
                        d = o(c, f, u, e, r, s);
                    return {
                        header: d,
                        guid: c,
                        traceId: f,
                        timestamp: u
                    }
                }

                function o(t, n, e, r, o, i) {
                    var a = "btoa" in window && "function" == typeof window.btoa;
                    if (!a) return null;
                    var s = {
                        v: [0, 1],
                        d: {
                            ty: "Browser",
                            ac: r,
                            ap: o,
                            id: t,
                            tr: n,
                            ti: e
                        }
                    };
                    return i && r !== i && (s.d.tk = i), btoa(JSON.stringify(s))
                }

                function i(t) {
                    var n = !1,
                        e = !1,
                        r = {};
                    if ("init" in NREUM && "distributed_tracing" in NREUM.init && (r = NREUM.init.distributed_tracing, e = !!r.enabled), e)
                        if (t.sameOrigin) n = !0;
                        else if (r.allowed_origins instanceof Array)
                        for (var o = 0; o < r.allowed_origins.length; o++) {
                            var i = s(r.allowed_origins[o]);
                            if (t.hostname === i.hostname && t.protocol === i.protocol && t.port === i.port) {
                                n = !0;
                                break
                            }
                        }
                    return e && n
                }
                var a = t(19),
                    s = t(13);
                n.exports = {
                    generateTracePayload: r,
                    shouldGenerateTrace: i
                }
            }, {}],
            12: [function(t, n, e) {
                function r(t) {
                    var n = this.params,
                        e = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < l; r++) t.removeEventListener(d[r], this.listener, !1);
                        n.aborted || (e.duration = a.now() - this.startTime, this.loadCaptureCalled || 4 !== t.readyState ? null == n.status && (n.status = 0) : i(this, t), e.cbTime = this.cbTime, u.emit("xhr-done", [t], t), s("xhr", [n, e, this.startTime]))
                    }
                }

                function o(t, n) {
                    var e = c(n),
                        r = t.params;
                    r.host = e.hostname + ":" + e.port, r.pathname = e.pathname, t.parsedOrigin = c(n), t.sameOrigin = t.parsedOrigin.sameOrigin
                }

                function i(t, n) {
                    t.params.status = n.status;
                    var e = w(n, t.lastSize);
                    if (e && (t.metrics.rxSize = e), t.sameOrigin) {
                        var r = n.getResponseHeader("X-NewRelic-App-Data");
                        r && (t.params.cat = r.split(", ").pop())
                    }
                    t.loadCaptureCalled = !0
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var s = t("handle"),
                        c = t(13),
                        f = t(11).generateTracePayload,
                        u = t("ee"),
                        d = ["load", "error", "abort", "timeout"],
                        l = d.length,
                        p = t("id"),
                        h = t(17),
                        m = t(16),
                        w = t(14),
                        v = window.XMLHttpRequest;
                    a.features.xhr = !0, t(10), t(6), u.on("new-xhr", function(t) {
                        var n = this;
                        n.totalCbs = 0, n.called = 0, n.cbTime = 0, n.end = r, n.ended = !1, n.xhrGuids = {}, n.lastSize = null, n.loadCaptureCalled = !1, t.addEventListener("load", function(e) {
                            i(n, t)
                        }, !1), h && (h > 34 || h < 10) || window.opera || t.addEventListener("progress", function(t) {
                            n.lastSize = t.loaded
                        }, !1)
                    }), u.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, o(this, t[1]), this.metrics = {}
                    }), u.on("open-xhr-end", function(t, n) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && n.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid);
                        var e = f(this.parsedOrigin);
                        e && e.header && (n.setRequestHeader("newrelic", e.header), this.dt = e)
                    }), u.on("send-xhr-start", function(t, n) {
                        var e = this.metrics,
                            r = t[0],
                            o = this;
                        if (e && r) {
                            var i = m(r);
                            i && (e.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" !== t.type || o.loadCaptureCalled || (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof n.onload)) && o.end(n)
                            } catch (e) {
                                try {
                                    u.emit("internal-error", [e])
                                } catch (r) {}
                            }
                        };
                        for (var s = 0; s < l; s++) n.addEventListener(d[s], this.listener, !1)
                    }), u.on("xhr-cb-time", function(t, n, e) {
                        this.cbTime += t, n ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof e.onload || this.end(e)
                    }), u.on("xhr-load-added", function(t, n) {
                        var e = "" + p(t) + !!n;
                        this.xhrGuids && !this.xhrGuids[e] && (this.xhrGuids[e] = !0, this.totalCbs += 1)
                    }), u.on("xhr-load-removed", function(t, n) {
                        var e = "" + p(t) + !!n;
                        this.xhrGuids && this.xhrGuids[e] && (delete this.xhrGuids[e], this.totalCbs -= 1)
                    }), u.on("addEventListener-end", function(t, n) {
                        n instanceof v && "load" === t[0] && u.emit("xhr-load-added", [t[1], t[2]], n)
                    }), u.on("removeEventListener-end", function(t, n) {
                        n instanceof v && "load" === t[0] && u.emit("xhr-load-removed", [t[1], t[2]], n)
                    }), u.on("fn-start", function(t, n, e) {
                        n instanceof v && ("onload" === e && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), u.on("fn-end", function(t, n) {
                        this.xhrCbStart && u.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, n], n)
                    }), u.on("fetch-before-start", function(t) {
                        var n, e = t[1] || {};
                        "string" == typeof t[0] ? n = t[0] : t[0] && t[0].url && (n = t[0].url), n && (this.parsedOrigin = c(n), this.sameOrigin = this.parsedOrigin.sameOrigin);
                        var r = f(this.parsedOrigin);
                        if (r && r.header) {
                            var o = r.header;
                            if ("string" == typeof t[0]) {
                                var i = {};
                                for (var a in e) i[a] = e[a];
                                i.headers = new Headers(e.headers || {}), i.headers.set("newrelic", o), this.dt = r, t.length > 1 ? t[1] = i : t.push(i)
                            } else t[0] && t[0].headers && (t[0].headers.append("newrelic", o), this.dt = r)
                        }
                    })
                }
            }, {}],
            13: [function(t, n, e) {
                var r = {};
                n.exports = function(t) {
                    if (t in r) return r[t];
                    var n = document.createElement("a"),
                        e = window.location,
                        o = {};
                    n.href = t, o.port = n.port;
                    var i = n.href.split("://");
                    !o.port && i[1] && (o.port = i[1].split("/")[0].split("@").pop().split(":")[1]), o.port && "0" !== o.port || (o.port = "https" === i[0] ? "443" : "80"), o.hostname = n.hostname || e.hostname, o.pathname = n.pathname, o.protocol = i[0], "/" !== o.pathname.charAt(0) && (o.pathname = "/" + o.pathname);
                    var a = !n.protocol || ":" === n.protocol || n.protocol === e.protocol,
                        s = n.hostname === document.domain && n.port === e.port;
                    return o.sameOrigin = a && (!n.hostname || s), "/" === o.pathname && (r[t] = o), o
                }
            }, {}],
            14: [function(t, n, e) {
                function r(t, n) {
                    var e = t.responseType;
                    return "json" === e && null !== n ? n : "arraybuffer" === e || "blob" === e || "json" === e ? o(t.response) : "text" === e || "" === e || void 0 === e ? o(t.responseText) : void 0
                }
                var o = t(16);
                n.exports = r
            }, {}],
            15: [function(t, n, e) {
                function r() {}

                function o(t, n, e) {
                    return function() {
                        return i(t, [f.now()].concat(s(arguments)), n ? null : this, e), n ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(21),
                    s = t(22),
                    c = t("ee").get("tracer"),
                    f = t("loader"),
                    u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    p = l + "ixn-";
                a(d, function(t, n) {
                    u[n] = o(l + n, !0, "api")
                }), u.addPageAction = o(l + "addPageAction", !0), u.setCurrentRouteName = o(l + "routeName", !0), n.exports = newrelic, u.interaction = function() {
                    return (new r).get()
                };
                var h = r.prototype = {
                    createTracer: function(t, n) {
                        var e = {},
                            r = this,
                            o = "function" == typeof n;
                        return i(p + "tracer", [f.now(), t, e], r),
                            function() {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], e), o) try {
                                    return n.apply(this, arguments)
                                } catch (t) {
                                    throw c.emit("fn-err", [arguments, this, t], e), t
                                } finally {
                                    c.emit("fn-end", [f.now()], e)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, n) {
                    h[n] = o(p + n)
                }), newrelic.noticeError = function(t, n) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now(), !1, n])
                }
            }, {}],
            16: [function(t, n, e) {
                n.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (n) {
                            return
                        }
                    }
                }
            }, {}],
            17: [function(t, n, e) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), n.exports = r
            }, {}],
            18: [function(t, n, e) {
                function r(t, n) {
                    var e = t.getEntries();
                    e.forEach(function(t) {
                        "first-paint" === t.name ? c("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && c("timing", ["fcp", Math.floor(t.startTime)])
                    })
                }

                function o(t, n) {
                    var e = t.getEntries();
                    e.length > 0 && c("lcp", [e[e.length - 1]])
                }

                function i(t) {
                    if (t instanceof u && !l) {
                        var n, e = Math.round(t.timeStamp);
                        n = e > 1e12 ? Date.now() - e : f.now() - e, l = !0, c("timing", ["fi", e, {
                            type: t.type,
                            fid: n
                        }])
                    }
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var a, s, c = t("handle"),
                        f = t("loader"),
                        u = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        a = new PerformanceObserver(r), s = new PerformanceObserver(o);
                        try {
                            a.observe({
                                entryTypes: ["paint"]
                            }), s.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (d) {}
                    }
                    if ("addEventListener" in document) {
                        var l = !1,
                            p = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        p.forEach(function(t) {
                            document.addEventListener(t, i, !1)
                        })
                    }
                }
            }, {}],
            19: [function(t, n, e) {
                function r() {
                    function t() {
                        return n ? 15 & n[e++] : 16 * Math.random() | 0
                    }
                    var n = null,
                        e = 0,
                        r = window.crypto || window.msCrypto;
                    r && r.getRandomValues && (n = r.getRandomValues(new Uint8Array(31)));
                    for (var o, i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx", a = "", s = 0; s < i.length; s++) o = i[s], "x" === o ? a += t().toString(16) : "y" === o ? (o = 3 & t() | 8, a += o.toString(16)) : a += o;
                    return a
                }

                function o() {
                    function t() {
                        return n ? 15 & n[e++] : 16 * Math.random() | 0
                    }
                    var n = null,
                        e = 0,
                        r = window.crypto || window.msCrypto;
                    r && r.getRandomValues && Uint8Array && (n = r.getRandomValues(new Uint8Array(31)));
                    for (var o = [], i = 0; i < 16; i++) o.push(t().toString(16));
                    return o.join("")
                }
                n.exports = {
                    generateUuid: r,
                    generateCatId: o
                }
            }, {}],
            20: [function(t, n, e) {
                function r(t, n) {
                    if (!o) return !1;
                    if (t !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var e = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== e[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var s = navigator.userAgent,
                        c = s.match(a);
                    c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari", i = c[1])
                }
                n.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            21: [function(t, n, e) {
                function r(t, n) {
                    var e = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (e[i] = n(r, t[r]), i += 1);
                    return e
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            22: [function(t, n, e) {
                function r(t, n, e) {
                    n || (n = 0), "undefined" == typeof e && (e = t ? t.length : 0);
                    for (var r = -1, o = e - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[n + r];
                    return i
                }
                n.exports = r
            }, {}],
            23: [function(t, n, e) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(t, n, e) {
                function r() {}

                function o(t) {
                    function n(t) {
                        return t && t instanceof r ? t : t ? c(t, s, i) : i()
                    }

                    function e(e, r, o, i) {
                        if (!l.aborted || i) {
                            t && t(e, r, o);
                            for (var a = n(o), s = m(e), c = s.length, f = 0; f < c; f++) s[f].apply(a, r);
                            var d = u[y[e]];
                            return d && d.push([x, e, r, a]), a
                        }
                    }

                    function p(t, n) {
                        g[t] = m(t).concat(n)
                    }

                    function h(t, n) {
                        var e = g[t];
                        if (e)
                            for (var r = 0; r < e.length; r++) e[r] === n && e.splice(r, 1)
                    }

                    function m(t) {
                        return g[t] || []
                    }

                    function w(t) {
                        return d[t] = d[t] || o(e)
                    }

                    function v(t, n) {
                        f(t, function(t, e) {
                            n = n || "feature", y[e] = n, n in u || (u[n] = [])
                        })
                    }
                    var g = {},
                        y = {},
                        x = {
                            on: p,
                            addEventListener: p,
                            removeEventListener: h,
                            emit: e,
                            get: w,
                            listeners: m,
                            context: n,
                            buffer: v,
                            abort: a,
                            aborted: !1
                        };
                    return x
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (l.aborted = !0, u = l.backlog = {})
                }
                var s = "nr@context",
                    c = t("gos"),
                    f = t(21),
                    u = {},
                    d = {},
                    l = n.exports = o();
                l.backlog = u
            }, {}],
            gos: [function(t, n, e) {
                function r(t, n, e) {
                    if (o.call(t, n)) return t[n];
                    var r = e();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(t, n, e) {
                function r(t, n, e, r) {
                    o.buffer([t], r), o.emit(t, n, e)
                }
                var o = t("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}],
            id: [function(t, n, e) {
                function r(t) {
                    var n = typeof t;
                    return !t || "object" !== n && "function" !== n ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                n.exports = r
            }, {}],
            loader: [function(t, n, e) {
                function r() {
                    if (!E++) {
                        var t = b.info = NREUM.info,
                            n = p.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && n)) return u.abort();
                        f(y, function(n, e) {
                            t[n] || (t[n] = e)
                        }), c("mark", ["onload", a() + b.offset], null, "api");
                        var e = p.createElement("script");
                        e.src = "https://" + t.agent, n.parentNode.insertBefore(e, n)
                    }
                }

                function o() {
                    "complete" === p.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + b.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (s = Math.max((new Date).getTime(), s)) - b.offset
                }
                var s = (new Date).getTime(),
                    c = t("handle"),
                    f = t(21),
                    u = t("ee"),
                    d = t(20),
                    l = window,
                    p = l.document,
                    h = "addEventListener",
                    m = "attachEvent",
                    w = l.XMLHttpRequest,
                    v = w && w.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: l.setImmediate,
                    CT: clearTimeout,
                    XHR: w,
                    REQ: l.Request,
                    EV: l.Event,
                    PR: l.Promise,
                    MO: l.MutationObserver
                };
                var g = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1169.min.js"
                    },
                    x = w && v && v[h] && !/CriOS/.test(navigator.userAgent),
                    b = n.exports = {
                        offset: s,
                        now: a,
                        origin: g,
                        features: {},
                        xhrWrappable: x,
                        userAgent: d
                    };
                t(15), t(18), p[h] ? (p[h]("DOMContentLoaded", i, !1), l[h]("load", r, !1)) : (p[m]("onreadystatechange", o), l[m]("onload", r)), c("mark", ["firstbyte", s], null, "api");
                var E = 0,
                    O = t(23)
            }, {}],
            "wrap-function": [function(t, n, e) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee"),
                    i = t(22),
                    a = "nr@original",
                    s = Object.prototype.hasOwnProperty,
                    c = !1;
                n.exports = function(t, n) {
                    function e(t, n, e, o) {
                        function nrWrapper() {
                            var r, a, s, c;
                            try {
                                a = this, r = i(arguments), s = "function" == typeof e ? e(r, a) : e || {}
                            } catch (f) {
                                l([f, "", [r, a, o], s])
                            }
                            u(n + "start", [r, a, o], s);
                            try {
                                return c = t.apply(a, r)
                            } catch (d) {
                                throw u(n + "err", [r, a, d], s), d
                            } finally {
                                u(n + "end", [r, a, c], s)
                            }
                        }
                        return r(t) ? t : (n || (n = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, n, o, i) {
                        o || (o = "");
                        var a, s, c, f = "-" === o.charAt(0);
                        for (c = 0; c < n.length; c++) s = n[c], a = t[s], r(a) || (t[s] = e(a, f ? s + o : o, i, s))
                    }

                    function u(e, r, o) {
                        if (!c || n) {
                            var i = c;
                            c = !0;
                            try {
                                t.emit(e, r, o, n)
                            } catch (a) {
                                l([a, e, r, o])
                            }
                            c = i
                        }
                    }

                    function d(t, n) {
                        if (Object.defineProperty && Object.keys) try {
                            var e = Object.keys(t);
                            return e.forEach(function(e) {
                                Object.defineProperty(n, e, {
                                    get: function() {
                                        return t[e]
                                    },
                                    set: function(n) {
                                        return t[e] = n, n
                                    }
                                })
                            }), n
                        } catch (r) {
                            l([r])
                        }
                        for (var o in t) s.call(t, o) && (n[o] = t[o]);
                        return n
                    }

                    function l(n) {
                        try {
                            t.emit("internal-error", n)
                        } catch (e) {}
                    }
                    return t || (t = o), e.inPlace = f, e.flag = a, e
                }
            }, {}]
        }, {}, ["loader", 2, 12, 4, 3]);
    </script>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta content="/nowhere" name="turbolinks-root">
    <title>Pembayaran Pembelian | Jurnal</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/jurnal-icon-3077d49acc1387104534d55005877fac.png">
    <link rel="stylesheet" media="all" href="/assets/transaction-a71a4fd59d3843cd39695203f829219a.css">

    <script src="/assets/application-cd90675b0fa71aacf7ef2f52de1cb52a.js"></script>
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="Wh6JeLkZWoOdT4oCv96slgac6nf6Z6cl31ngJeySnV89cd/uJbavphQC7FvmCM0wq2pQTj3QcFBMbJ8CXmklMg==">

    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <style id="poshytip-css-tip-twitter" type="text/css">
        div.tip-twitter {
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
        }

        div.tip-twitter table.tip-table,
        div.tip-twitter table.tip-table td {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            font-style: inherit;
            font-variant: inherit;
            vertical-align: middle;
        }

        div.tip-twitter td.tip-bg-image span {
            display: block;
            font: 1px/1px sans-serif;
            height: 10px;
            width: 10px;
            overflow: hidden;
        }

        div.tip-twitter td.tip-right {
            background-position: 100% 0;
        }

        div.tip-twitter td.tip-bottom {
            background-position: 100% 100%;
        }

        div.tip-twitter td.tip-left {
            background-position: 0 100%;
        }

        div.tip-twitter div.tip-inner {
            background-position: -10px -10px;
        }

        div.tip-twitter div.tip-arrow {
            visibility: hidden;
            position: absolute;
            overflow: hidden;
            font: 1px/1px sans-serif;
        }
    </style>
    <style id="poshytip-css-tip-twitter-white" type="text/css">
        div.tip-twitter-white {
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
        }

        div.tip-twitter-white table.tip-table,
        div.tip-twitter-white table.tip-table td {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            font-style: inherit;
            font-variant: inherit;
            vertical-align: middle;
        }

        div.tip-twitter-white td.tip-bg-image span {
            display: block;
            font: 1px/1px sans-serif;
            height: 10px;
            width: 10px;
            overflow: hidden;
        }

        div.tip-twitter-white td.tip-right {
            background-position: 100% 0;
        }

        div.tip-twitter-white td.tip-bottom {
            background-position: 100% 100%;
        }

        div.tip-twitter-white td.tip-left {
            background-position: 0 100%;
        }

        div.tip-twitter-white div.tip-inner {
            background-position: -10px -10px;
        }

        div.tip-twitter-white div.tip-arrow {
            visibility: hidden;
            position: absolute;
            overflow: hidden;
            font: 1px/1px sans-serif;
        }
    </style>
    <style type="text/css">
        .fancybox-margin {
            margin-right: 17px;
        }
    </style>
</head>

<body id="modj" class="pace-done" style="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div id="wrapper">
        <div class="alert alert-danger alert-notif alert-almost-expired hidden">
            <span>
                Masa percobaan
            </span>
            <p>
                Halo Qomarudin, masa percobaan Anda akan berakhir dalam 9 hari.
                <a href="/company/setting#billings">Berlangganan sekarang</a>
            </p>
            <button arial-label="Close" class="close close-notif" data-dismiss="alert">
                ×
            </button>
        </div>
        <div class="navbar-static-side in" id="sidebar-wrapper">
            <ul class="side-menu nav" id="side-menu">
                <li class="sidebar-brand">
                    <a href="/">
                        <img alt="Jurnal" class="logo_j" height="46" src="/assets/jurnal-logo-6a3bcb679aa25f58656e42a7fee9ea65.svg" width="144">
                    </a>
                </li>
                <li class="" id="dashboard-li">
                    <a class="sidenav-tooltip" href="/" id="vnav-dashboard-link">
                        <img class="img_icon" src="/assets/icon/dashboard-a58143f51f6fef150eac016e847c7477.svg">
                        <span class="nav-label in">
                            Dasbor
                        </span>
                    </a>
                </li>
                <li class="" id="reports-li">
                    <a class="sidenav-tooltip" href="/reports/index" id="vnav-reports-link">
                        <img class="img_icon" src="/assets/icon/reports-7c252cd294e650672b1c1526c295772c.svg">
                        <span class="nav-label in">
                            Laporan
                        </span>
                    </a>
                </li>
                <li class="v-nav-divider"></li>
                <li class="" id="registers-li">
                    <a class="sidenav-tooltip" href="/registers/index" id="vnav-cashbank-link">
                        <img class="img_icon" src="/assets/icon/cashandbank-5b96d1806ce8ee7ae3e834712e7eb59e.svg">
                        <span class="nav-label in">
                            Kas &amp; Bank
                        </span>
                    </a>
                </li>
                <li class="" id="sales-li">
                    <a class="sidenav-tooltip" href="/invoices" id="vnav-sales-link">
                        <img class="img_icon" src="/assets/icon/sales-ba35cc15f6c3703fdfba0b12e9ad99e8.svg">
                        <span class="nav-label in">
                            Penjualan
                        </span>
                    </a>
                </li>
                <li class="" id="purchases-li">
                    <a class="sidenav-tooltip" href="/purchases" id="vnav-purchases-link" style="background-color: rgb(58, 200, 248);">
                        <img class="img_icon" src="/assets/icon/purchase-496f50704826a8eeb3ae15d1d3d97b0d.svg">
                        <span class="nav-label in">
                            Pembelian
                        </span>
                    </a>
                </li>
                <li class="" id="expenses-li">
                    <a class="sidenav-tooltip" href="/expenses" id="vnav-expenses-link">
                        <img class="img_icon" src="/assets/icon/expense-4f579aebd575a99d5703ed2021a2279e.svg">
                        <span class="nav-label in">
                            Biaya
                        </span>
                    </a>
                </li>
                <li class="v-nav-divider"></li>
                <li class="" id="contacts-li">
                    <a class="sidenav-tooltip" href="/contacts" id="vnav-contacts-link">
                        <img class="img_icon" src="/assets/icon/contacts-87e803c8a43f242640e5c7ec0d093152.svg">
                        <span class="nav-label in">
                            Kontak
                        </span>
                    </a>
                </li>
                <li class="" id="products-li">
                    <a class="sidenav-tooltip" href="/products/index" id="vnav-inventory-link">
                        <img class="img_icon" src="/assets/icon/product-952b62d410edd6ec635efb26fbda9141.svg">
                        <span class="nav-label in">
                            Produk
                        </span>
                    </a>
                </li>
                <li class="" id="assets-li">
                    <a class="sidenav-tooltip" href="/asset_managements" id="vnav-assetmanagement-link">
                        <img class="img_icon" src="/assets/icon/asset_management-ef02118e7000c196026e041e1192ff2f.svg">
                        <span class="nav-label in">
                            Pengaturan Aset
                        </span>
                    </a>
                </li>
                <li class="" id="bookkeeping-chart_of_accounts-li">
                    <a class="sidenav-tooltip" href="/accounts/chart_of_accounts" id="vnav-chartofaccounts-link">
                        <img class="img_icon" src="/assets/icon/chartofaccount-565b9e28f84edab97374fda0a5ae7055.svg">
                        <span class="nav-label in">
                            Daftar Akun
                        </span>
                    </a>
                </li>
                <li class="v-nav-divider"></li>
                <li class="" id="payroll-li">
                    <a class="sidenav-tooltip" href="/payroll" id="vnav-payroll-link">
                        <img class="img_icon" src="/assets/icon/payroll-72e43b82c6c9764aa2266ab7e85c620b.svg">
                        <span class="nav-label in">
                            Payroll
                        </span>
                    </a>
                </li>
                <li class="" id="company-lists-li">
                    <a class="sidenav-tooltip" href="/company/lists" id="vnav-otherlists-link">
                        <img class="img_icon" src="/assets/icon/otherlist-09fd7bf1b0649945939209efefd0de40.svg">
                        <span class="nav-label in">
                            Daftar Lainnya
                        </span>
                    </a>
                </li>
                <li class="" id="add-ons-li">
                    <a class="sidenav-tooltip" href="/company/add_ons" id="vnav-add-ons-link">
                        <img class="add_on_image" src="https://s3-ap-southeast-1.amazonaws.com/jurnal-quickbook-s3/images/icon_apps.svg">
                        <span class="nav-label in">
                            Add-Ons
                        </span>
                    </a>
                </li>
                <li class="" id="company-setting-li">
                    <a class="sidenav-tooltip" href="/company/setting" id="vnav-settings-link">
                        <img class="img_icon" src="/assets/icon/setting-af9f6e5dc3a8b4270e4222162827e52d.svg">
                        <span class="nav-label in">
                            Settings
                        </span>
                    </a>
                </li>
                <li class="logoff">
                    <a class="sidenav-tooltip" data-method="delete" href="/users/logout" id="vnav-logout-link">
                        <img class="img_icon" src="/assets/icon/signout-8fe386b4bb59b7acdb1101c8f94767fe.svg">
                        <span class="nav-label in">
                            Keluar
                        </span>
                    </a>
                </li>
                <li class="border">
                    <a class="arrow-left in" id="menu-toggle">
                        <i class="arrow_menu fa fa-fw img_icon fa-angle-double-left"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="notification hidden">
            <div id="header_section">
                <nav class="notif-navbar">
                    <input type="hidden" name="company_notification" id="company_notification" value="215589">
                    <div class="row header_notif">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <i class="notif-image-margin">
                                <img src="/assets/icon/notification-nav-08217abf3303d0f2aea9e7389929ea7c.svg" alt="Notification nav">
                            </i>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 title">
                            Pemberitahuan
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 arrow">
                            <i class="fa fa-angle-double-right fa-2x fa-inverse" id="arrow_notif"></i>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="hidden" id="setting_section">
                <nav class="notif-navbar">
                    <div class="row header_notif">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <i class="notif-image-margin fa fa-bell"></i>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8 title setting-title">
                            Pengaturan
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 arrow" id="setting_arrow_notif">
                            <i class="fa fa-angle-left fa-2x fa-inverse"></i>
                        </div>
                    </div>
                </nav>

            </div>
            <div id="unavailable">
                Bagian ini sementara tidak tersedia.
            </div>
        </div>

        <div class="out" id="page-wrapper">
            <div class="mobile-nav show-small col-xs-12">
                <span class="icn-toggle">
                    <b class="srt">
                        Toggle
                    </b>
                </span>
                <!-- / NOTIFICATION ICON -->
                <span class="notif-toggle notif-sini">
                    <div class="fa fa-bell-o fa-2x"></div>
                </span>
                <a href="/">
                    <img alt="Jurnal" height="40" src="/assets/jurnal-logo-6a3bcb679aa25f58656e42a7fee9ea65.svg" width="125">
                </a>
            </div>
            <!-- /Top Navbar -->
            <nav class="navbar sm top-navbar">
                <div class="col-xs-12 col-sm-7 col-md-4 show-large">
                    <ul class="shortcut nav navbar-nav">
                        <li id="menu-bar-invoice-create">
                            <a href="/invoices/new">
                                <img class="img_icon_top" id="sale" src="/assets/icon/sales-ba35cc15f6c3703fdfba0b12e9ad99e8.svg">
                                Jual
                            </a>
                        </li>
                        <li id="menu-bar-purchase-create">
                            <a href="/purchases/new">
                                <img class="img_icon_top" id="purchase" src="/assets/icon/purchase-496f50704826a8eeb3ae15d1d3d97b0d.svg">
                                Beli
                            </a>
                        </li>
                        <li id="menu-bar-expense-create">
                            <a href="/expenses/new">
                                <img class="img_icon_top" id="expense" src="/assets/icon/expense-4f579aebd575a99d5703ed2021a2279e.svg">
                                Biaya
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-8">
                    <div class="row" id="show_notif" style="display:block;">
                        <!-- / NOTIFICATION ICON -->
                        <div class="notif_icon_box float-right" id="notif_id">
                            <center>
                                <div class="notif_icon">
                                    <img style="width:35%; padding-top:14px; margin-right:18px;" src="/assets/icon/notification-nav-08217abf3303d0f2aea9e7389929ea7c.svg" alt="Notification nav">
                                </div>
                            </center>
                        </div>
                        <div class="top_five_activities_box">
                            <div class="top-five-dropdown" id="dd" tabindex="1">
                                <span>
                                    <img style="width: 75%; margin-right: 2px; margin-top: -2px; margin-left: 2px;" id="activity-timeline-img" src="/assets/icon/activity-nav-24cf5bef20cfb30310105fcdf2df2fa1.svg">
                                </span>
                                <ul class="dropdown">
                                    <div class="activity-timeline-toolbar">
                                        <div class="medium-text">
                                            Riwayat Aktifitas
                                        </div>
                                    </div>
                                    <div class="card-container"></div>
                                    <div id="card_pagination" style="display:none;"></div>
                                </ul>
                            </div>
                        </div>
                        <a href="/data_migrations">
                            <div class="data_migration_top_nav">
                                <div class="data_migration_box" data-value="true" id="data-migration">
                                    <span>
                                        <img style="width: 100%; margin-right: 2px; margin-top: -2px;" id="activity-timeline-img" src="/assets/icon/data-migration-nav-1232c8900ed91c92ab6194baa33f6cab.svg">
                                    </span>
                                    <div class="data-migration-tooltip hidden">
                                        <div class="tooltiptext">
                                            Kembali ke migrasi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="btn-group nav-user-text">
                            <div class="dropdown-toggle user-nav uppercase" data-toggle="dropdown" style="padding: 6px 0px;">
                                <div style="max-width: 412px; display: flex;">
                                    <div class="text-long" style="max-width: 400px;">
                                        <a href="/">
                                            PT. XYZ
                                        </a>
                                    </div>
                                    <i class="fa fa-caret-down" style="cursor:pointer;margin-left: 4px;"></i>
                                </div>
                                <div class="user-name-label">
                                    Qomarudin
                                </div>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-right" style="max-width: 200px; left: auto;">
                                <li>
                                    <a href="/user_account/profile">Profil Akun</a>
                                </li>
                                <li>
                                    <a href="/user_account/companies">Daftar Perusahaan</a>
                                </li>
                                <li>
                                    <a class="new-label" href="/credential_access">
                                        <div class="new-feature">
                                            API Credentials
                                        </div>
                                        <div class="new-tag">
                                            New
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="new-label" href="/user_referrals">
                                        <div class="new-feature">
                                            Referral program
                                        </div>
                                        <div class="new-tag">
                                            New
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div>
                                        <a style="display: flex; color: inherit;" rel="nofollow" data-method="post" href="/users/switch_company?company_id=215589">
                                            <div class="text-long" style="max-width: 170px;">
                                                PT. XYZ
                                            </div>
                                            <div style="margin-left: 4px;">
                                                (Aktif)
                                            </div>
                                        </a></div>
                                </li>
                                <li>
                                    <a style="display: flex;" rel="nofollow" data-method="post" href="/users/switch_company?company_id=215645">
                                        <div class="text-long" style="max-width: 170px;">
                                            PT. ABC
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group nav-user-text" id="hide_notif" style="display:none;">
                        <div class="dropdown-toggle user-nav uppercase" data-toggle="dropdown" style="padding: 6px 0px;">
                            <a href="/">
                                PT. XYZ
                            </a>
                            <i class="fa fa-caret-down"></i>
                            <div class="user-name-label">
                                Qomarudin
                            </div>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-right" style="left: auto;">
                            <li>
                                <a href="/user_account/profile">Profil Akun</a>
                            </li>
                            <li>
                                <a href="/user_account/companies">Daftar Perusahaan</a>
                            </li>
                            <li>
                                <a class="new-label" href="/credential_access">
                                    <div class="new-feature">
                                        API Credentials
                                    </div>
                                    <img class="margin-left-10 new-tag-mobile" src="/assets/icon/new-41678a911ead2dd9b3afa89db8bf9bf6.svg" width="37px">
                                </a>
                            </li>
                            <li>
                                <a class="new-label" href="/user_referrals">
                                    <div class="new-feature">
                                        Referral program
                                    </div>
                                    <img class="margin-left-10 new-tag-mobile" src="/assets/icon/new-41678a911ead2dd9b3afa89db8bf9bf6.svg" width="37px">
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a rel="nofollow" data-method="post" href="/users/switch_company?company_id=215589">PT. XYZ (Aktif)</a>
                            </li>
                            <li>
                                <a rel="nofollow" data-method="post" href="/users/switch_company?company_id=215645">PT. ABC</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <div class="top-navbar-replicate"></div>
            <div class="flash-message alert fade in blueprint-flash" style="padding-left: 25px; display: none;">
                <a class="no-override close" data-dismiss="alert" href="#">×</a>
                <i class="fa fa-info-circle"></i>
            </div>

            <input type="hidden" name="company_id" id="company_id" value="215589">
            <div id="main-content" class="dz-clickable">
                <header class="page-heading border-bottom white-bg">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="page-title-heading">
                                <h2>
                                    <small>
                                        Transaksi
                                    </small>
                                    Ubah Pembayaran
                                </h2>
                                <div class="hidden" id="company-currency-symbol">
                                    Rp.
                                </div>
                                <div class="hidden" id="company-currency-delimiter">
                                    .
                                </div>
                                <div class="hidden" id="company-currency-separator">
                                    ,
                                </div>
                                <div class="hidden" id="company-currency-precision">
                                    2
                                </div>
                                <div class="hidden" id="company-currency-base-symbol">
                                    Rp.
                                </div>
                                <div class="hidden" id="company-clone-transaction">

                                </div>
                                <div class="hidden" id="transaction-provider-id">

                                </div>
                                <input type="hidden" name="selected_type" id="selected_type" value="10">
                                <input type="hidden" name="witholding_currency" id="witholding_currency">
                                <input type="hidden" name="deposit_currency" id="deposit_currency">
                                <input type="hidden" name="order_custom_rate" id="order_custom_rate">
                                <input type="hidden" name="preferred_purchase_term_id" id="preferred_purchase_term_id" value="1007548">

                            </div>
                        </div>
                    </div>
                </header>
                <section class="page-content transactions">
                    <div class="col-md-12 main-form">
                        <div class="row">
                            <form id="main_form" novalidate="novalidate" class="simple_form edit_transaction" action="/purchase_payments/149513309" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="Wh6JeLkZWoOdT4oCv96slgac6nf6Z6cl31ngJeySnV89cd/uJbavphQC7FvmCM0wq2pQTj3QcFBMbJ8CXmklMg==">
                                <div class="form-group hidden transaction_token"><input class="form-control hidden" type="hidden" value="JBEfUXikED7-S68MBZnVbQ" name="transaction[token]" id="transaction_token"></div>
                                <div class="form-group hidden transaction_transaction_type"><input class="form-control hidden" type="hidden" value="10" name="transaction[transaction_type_id]" id="transaction_transaction_type_id"></div>
                                <input default="default" class="hidden" type="hidden" value="149513309" name="transaction[id]" id="transaction_id">
                                <div class="form-group hidden transaction_person"><input class="form-control hidden" type="hidden" value="12479589" name="transaction[person_id]" id="transaction_person_id"></div>
                                <input type="hidden" value="false" name="transaction[is_draft]" id="transaction_is_draft">
                                <!-- IMPORTANT INFO (row above all inputs) -->
                                <div class="important-info form row">
                                    <!-- Customer Name -->
                                    <div class="col-lg-3">
                                        <label class="control-label" style="font-family: Gotham-Bold">
                                            Supplier
                                        </label>
                                        <div class="input-group customer">
                                            <select class="form-control select required disabled newclass form-control" disabled="disabled" name="transaction[person_id]" id="transaction_person_id">
                                                <option selected="selected" value="12479589">Supplier (Supplier)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Second column -->
                                    <div class="col-lg-3">
                                        <label class="control-label" style="font-family: Gotham-Bold">
                                            Bayar Dari
                                        </label>
                                        <div class="customer" style="width: 100%">
                                            <div class="select2-container form-control font-size-12 invoice_refund check_currency_list select2-allowclear" id="s2id_invoice_deposit_to"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-6">(1-10001) - Kas (Cash &amp; Bank)</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6">
                                                <div class="select2-drop select2-display-none select2-with-searchbox select2-drop-active" style="font-weight: normal; display: none; left: 225px; width: 558px; bottom: auto; top: 284.575px; position: fixed;">
                                                    <div class="select2-search"> <label for="s2id_autogen6_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder=""> </div>
                                                    <ul class="select2-results" role="listbox" id="select2-results-6"></ul>
                                                </div>
                                            </div><input label_method="get_name_with_code" value_method="id" wrapper="false" label="false" class="form-control font-size-12 select2-ajax-account invoice_refund check_currency_list" include_blank="false" default="default" id="invoice_deposit_to" data-category="account" data-type="cash" data-priority="cash-bank" data-new="yes" value="26253438" type="text" name="transaction[refund_from_id]" tabindex="-1" title="" style="display: none;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 total-amount">
                                        <h2>
                                            Total
                                            <span id="header_amount">Rp. 11.000.000,00</span>
                                        </h2>
                                    </div>
                                </div>
                                <!-- / INVOICE DETAILS ROW WILL -->
                                <div class="invoice-details row">
                                    <!-- FIRST COLUMN -->
                                    <div class="col-lg-2">
                                        <div class="contact-details">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Cara Pembayaran
                                                </label>
                                                <div class="select2-container form-control select optional newclass form-control" id="s2id_transaction_payment_method_id"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-1">Transfer Bank</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1">
                                                    <div class="select2-drop select2-display-none select2-with-searchbox select2-drop-active" style="font-weight: normal; display: none; left: 225px; width: 188px; bottom: auto; top: 306.35px; position: fixed;">
                                                        <div class="select2-search"> <label for="s2id_autogen1_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder=""> </div>
                                                        <ul class="select2-results" role="listbox" id="select2-results-1"></ul>
                                                    </div>
                                                </div><select class="form-control select optional newclass form-control select2-single" name="transaction[payment_method_id]" id="transaction_payment_method_id" tabindex="-1" title="" style="display: none;">
                                                    <option value="1086192">Kas Tunai</option>
                                                    <option value="1086193">Cek &amp; Giro</option>
                                                    <option selected="selected" value="1086194">Transfer Bank</option>
                                                    <option value="1086195">Kartu Kredit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SECOND COLUMN - PAYMENT TERMS -->
                                    <div class="col-lg-2">
                                        <div class="payment-terms">
                                            <!-- Transaction Date -->
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Tgl Pembayaran
                                                </label>
                                                <div class="input-group date" data-date-format="dd/mm/yyyy">
                                                    <span class="input-group-addon custom">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input class="form-control string required  form-control" value="14/06/2020" type="text" name="transaction[transaction_date]" id="transaction_transaction_date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="payment-terms">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Tgl Jatuh Tempo
                                                </label>
                                                <div class="input-group date" data-date-format="dd/mm/yyyy">
                                                    <span class="input-group-addon custom">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input class="form-control string optional form-control" type="text" name="transaction[due_date]" id="transaction_due_date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-push-2">
                                        <div class="taggings">
                                            <label class="control-label">
                                                Tag
                                            </label>
                                            <div class="select2-container select2-container-multi tags_size" id="s2id_transaction_tag_ids" style="position: relative;">
                                                <ul class="select2-choices">
                                                    <li class="select2-search-field"> <label for="s2id_autogen4" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen4" style="width: 34px;" placeholder=""> </li>
                                                </ul>
                                                <div id="select2-drop-mask" class="select2-drop-mask" style="display: none;"></div>
                                                <div class="select2-drop select2-drop-multi select2-display-none select2-drop-active" style="display: none; width: 558px; bottom: auto; position: absolute; top: 34px; left: 0px;">
                                                    <ul class="select2-results"></ul>
                                                </div>
                                            </div><input class="select2-multiple-ajax tags_size" type="text" value="" name="transaction[tag_ids]" id="transaction_tag_ids" tabindex="-1" style="display: none;">
                                        </div>
                                    </div>
                                    <!-- FOURTH COLUMN -->
                                    <div class="col-lg-2 col-lg-push-2">
                                        <div class="transaction-ref">
                                            <!-- Transaction Number -->
                                            <div class="form-group">
                                                <label class="control-label">
                                                    No Transaksi
                                                </label>
                                                <input class="form-control string optional form-control" type="text" value="10003" name="transaction[transaction_no]" id="transaction_transaction_no">
                                                <input class="hidden" type="hidden" name="transaction[transaction_no_format_id]" id="transaction_transaction_no_format_id">
                                                <input type="hidden" name="is_change_type" id="is_change_type">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="multi-currency-row row form-horizontal">
                                    <div class="col-lg-6">
                                    </div>

                                </div>

                                <div class="products-table row" style="margin: 0">
                                    <!-- INVOICE - TABLE TO ADD PRODUCTS TO INVOICE -->
                                    <div class="table-container list-table">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="main_record">
                                                <thead class="table-header">
                                                    <tr>
                                                        <th class="col-md-2">
                                                            Number
                                                        </th>
                                                        <th class="col-md-2">
                                                            Deskripsi
                                                        </th>
                                                        <th class="col-md-2">
                                                            Tgl Jatuh Tempo
                                                        </th>
                                                        <th>
                                                            Total
                                                        </th>
                                                        <th>
                                                            Sisa Tagihan
                                                        </th>
                                                        <th>
                                                            Jumlah
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="group_lines">
                                                    <tr>
                                                        <td>
                                                            <input class="hidden" type="hidden" value="149480967" name="transaction[records_attributes][0][transaction_id]" id="transaction_records_attributes_0_transaction_id">
                                                            <a class="tooltip_trans position-relative" href="/purchases/149480967" title="1 (Buah) Cisco 4500;">
                                                                Purchase Invoice #10003
                                                            </a>

                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            14/07/2020
                                                        </td>
                                                        <td>
                                                            Rp. 11.000.000,00
                                                        </td>
                                                        <td>
                                                            Rp. 0,00
                                                        </td>
                                                        <td>
                                                            <input class="form-control string required form-control amount-input" type="text" value="11000000.0" name="transaction[records_attributes][0][amount]" id="transaction_records_attributes_0_amount" data-value="11000000.0">
                                                        </td>
                                                    </tr>

                                                    <input type="hidden" value="52415806" name="transaction[records_attributes][0][id]" id="transaction_records_attributes_0_id">
                                                </tbody>
                                            </table>
                                            <a href="#" id="load_purchase" style="padding-left: 14px; cursor: pointer; display: none;">
                                                <i class="fa fa-plus-circle"></i>
                                                Tampilkan lagi
                                            </a>
                                            <div class="paginate_scroll" style="padding-left: 14px; display: none;">
                                                <i class="fa fa-spinner fa-2x fa-spin"></i>
                                                Memuat hasil...
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="invoice-summary row" style="margin: 0; background: white">
                                    <div class="col-lg-6">
                                        <div class="invoice-notes">
                                            <div class="form-group message">
                                                <label>
                                                    Memo
                                                </label>
                                                <textarea class="form-control text optional form-control" name="transaction[memo]" id="transaction_memo"></textarea>
                                            </div>
                                        </div>
                                        <label>
                                            <i class="fa fa-paperclip"></i>
                                            Lampiran
                                        </label>
                                        <div class="form-group attachment">
                                            <div class="file-attachments">
                                            </div>
                                            <div class="dropzonePreview" id="dropzonePreview">

                                            </div>
                                            <div class="dropzoneAdd dz-clickable" id="dropzoneAdd">
                                                <div class="addText">
                                                    <div class="fa fa-cloud-upload"></div>
                                                    Tarik file ke sini, atau
                                                    <span style="color:#22B5E7; text-decoration: underline">
                                                        pilih file
                                                    </span>
                                                </div>
                                                <div class="addText-detail">
                                                    ukuran maksimal 10 MB/file
                                                </div>
                                            </div>
                                            <div class="dropzoneMaxFileReached" id="dropzoneMaxFileReached" style="display:none">
                                                Jumlah file upload telah mencapai limit
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-lg-push-1">
                                        <div id="witholding_toggle_row">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12 col-xs-12 text-right">
                                                    <a href="#" id="witholding_toggle">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        Masukan Jumlah Pemotongan
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 col-xs-12"></div>
                                                <div class="col-lg-4 col-sm-12 col-xs-12"></div>
                                            </div>
                                        </div>
                                        <div class="hidden" id="witholding_input_row">
                                            <div class="row">
                                                <div class="witholding">
                                                    <div class="col-lg-4 col-sm-4 col-xs-4 witholding-account">
                                                        <div class="select2-container form-control check_currency_list select2-allowclear" id="s2id_witholding_account"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-7">(1-10001) - Kas (Cash &amp; Bank)</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen7" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-7" id="s2id_autogen7">
                                                            <div class="select2-drop select2-display-none select2-with-searchbox" style="font-weight:normal;">
                                                                <div class="select2-search"> <label for="s2id_autogen7_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-7" id="s2id_autogen7_search" placeholder=""> </div>
                                                                <ul class="select2-results" role="listbox" id="select2-results-7"> </ul>
                                                            </div>
                                                        </div><input label_method="get_name_with_code" value_method="id" label="false" wrapper="false" class="form-control select2-ajax-account check_currency_list" id="witholding_account" data-category="account" data-type="account" data-priority="all" data-new="no" value="26253438" type="text" name="transaction[witholding_account_id]" tabindex="-1" title="" style="display: none;">
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-xs-4">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 no-padding">
                                                                <label class="label-control text-small">
                                                                    Pemotongan
                                                                </label>
                                                                <input class="form-control string optional form-control" data-value="0.0" type="text" value="0.0" name="transaction[witholding_value]" id="transaction_witholding_value">
                                                                <input class="form-control hidden form-control" data-value="percent" type="hidden" value="percent" name="transaction[witholding_type]" id="transaction_witholding_type">
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-top-1-7em">
                                                                <span class="btn-group btn-toggle">
                                                                    <button class="btn btn-default btn-selected btn-switch btn-toggle-percent btn-toggle-percent-value" data-value="percent" target="transaction_witholding_type" var_input="transaction_witholding_value">
                                                                        %
                                                                    </button>
                                                                    <button class="btn btn-default btn-switch btn-toggle-percent-values toggle-currency-symbol" data-value="value" id="btn-toggle-value" target="transaction_witholding_type" var_input="transaction_witholding_value">
                                                                        Rp.
                                                                    </button>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-xs-4 text-right amount witholding-amount" id="witholding-amount">Rp. 0,00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invoice-total">
                                            <!-- Sub Total -->
                                            <div class="subtotal row">
                                                <div class="col-lg-4 col-sm-4 col-xs-4 amount-due">
                                                    Total
                                                </div>
                                                <div class="amount-due text-right" id="total_payment">Rp. 11.000.000,00</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="action-group">
                                    <div class="col-md-12 text-right">
                                        <a class="btn btn-action btn-danger" href="/purchase_payments/149513309">
                                            <i class="fa fa-close"></i>
                                            Batal
                                        </a>
                                        <!-- # = f.button :submit, name: "create", id: id, value: submit_label, class: "btn btn-action button_submit btn-success #{button_class}", data: { disable_with: t('processing-label')} -->
                                        <button name="button" type="submit" id="update_invoice" class="btn btn-action btn-success " wrapper="false" data-disable-with="Sedang Diproses...">Ubah Pembayaran</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <script>
                var fakeProviderID = "6";
            </script>

            <div class="popup-dnd-container" id="popup-dnd" onclick="$(this).hide()" style="display:none">
                <div class="dnd-modal" style="pointer-events: none">
                    <div class="dnd-item-container">
                        <div class="dnd-item-1"></div>
                        <div class="dnd-item-2"></div>
                        <div class="dnd-item-3"></div>
                    </div>
                    <div class="dnd-text-container">
                        <div class="dnd-text-header">
                            TARIK FILE UNTUK MENGUNGGAH
                        </div>
                        <div class="dnd-text-detail">
                            <div class="p">
                                Dengan menarik file ke sini, file tersebut akan menjadi
                            </div>
                            <div class="p">
                                lampiran untuk transaksi ini.
                            </div>
                            <div class="p" style="font-size: 0.8em">
                                Anda dapat menambahkan hingga 5 lampiran dalam satu file
                            </div>
                            <div class="p" style="font-size: 0.8em">
                                Ukuran maksimum lampiran adalah 10 MB/file.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-dnd-confirm">
                <div class="modal-dialog modal-dialog-asset-white" style="top:calc(50vh - 140px); padding:0">
                    <div class="modal-header">
                        <input type="hidden" name="dnd_confirm_id" id="dnd_confirm_id" value="">
                        <button class="close" data-dismiss="modal" style="margin-top:-8px" type="button">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12" style="text-align:center">
                                <p>
                                    Apakah anda yakin ingin menghapus attachment?
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-2"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="text-align:center">
                                <button class="btn btn-soft-grey" data-dismiss="modal" style="width:70%" type="button">
                                    Cancel
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="text-align:center">
                                <button class="btn btn-action" onclick="deleteAttachment($('#dnd_confirm_id').val(), 1)" style="width:70%">
                                    Ya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="add-account">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 class="modal-title" id="modal-label">
                            Akun Baru
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form id="account-form" class="simple_form form-horizontal" novalidate="novalidate" action="/accounts.json" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                            <div class="error-messages"></div>
                            <div class="form-group hidden account_category_id"><input class="form-control hidden" value="3" type="hidden" name="account[category_id]" id="account_category_id"></div>
                            <div class="form-group">
                                <label class="col-sm-12 col-md-4 control-label">
                                    Nama
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control string required" type="text" name="account[name]" id="account_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 col-md-4 control-label">
                                    Nomor
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control string optional" type="text" name="account[number]" id="account_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 col-md-4 control-label">
                                    Kategori
                                </label>
                                <div class="col-md-7">
                                    <div class="select2-container form-control select required newclass form-control fixed-in-bottom" id="s2id_account_category_id"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-2">Kas &amp; Bank</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                        <div class="select2-drop select2-display-none select2-with-searchbox" style="font-weight:normal;">
                                            <div class="select2-search"> <label for="s2id_autogen2_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder=""> </div>
                                            <ul class="select2-results" role="listbox" id="select2-results-2"> </ul>
                                        </div>
                                    </div><select class="form-control select required newclass form-control select2-single-no-add fixed-in-bottom" name="account[category_id]" id="account_category_id" tabindex="-1" title="" style="display: none;">
                                        <option selected="selected" value="3">Kas &amp; Bank</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 col-md-4 control-label" id="company_tax_label">
                                    Pajak
                                </label>
                                <div class="col-lg-7">
                                    <div class="select2-container form-control tax-line transaction_tax fixed-in-bottom" id="s2id_account_company_tax_id"><a href="javascript:void(0)" class="select2-choice select2-default" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-5">Pilih pajak</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5">
                                        <div class="select2-drop select2-display-none select2-with-searchbox" style="font-weight:normal;">
                                            <div class="select2-search"> <label for="s2id_autogen5_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder=""> </div>
                                            <ul class="select2-results" role="listbox" id="select2-results-5"> </ul>
                                        </div>
                                    </div><input include_blank="true" label="false" wrapper="false" class="form-control select2-ajax-other tax-line transaction_tax fixed-in-bottom" data-category="other" data-type="tax" data-new="no" type="text" name="account[company_tax_id]" id="account_company_tax_id" tabindex="-1" title="" style="display: none;">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default close-clear" data-dismiss="modal" type="button">
                            Tutup
                        </button>
                        <button class="btn btn-primary" id="add-new-account">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="add-payment-method">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 class="modal-title" id="modal-label">
                            Metode Pembayaran Baru
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form id="payment-method-form" class="simple_form form-horizontal" novalidate="novalidate" action="/payment_methods.json" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                            <div class="error-messages"></div>
                            <div class="form-group">
                                <label class="col-sm-12 col-md-4 control-label">
                                    Nama
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control string required" maxlength="255" size="255" type="text" name="payment_method[name]" id="payment_method_name">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default close-clear" data-dismiss="modal" type="button">
                            Tutup
                        </button>
                        <button class="btn btn-primary" id="add-new-payment-method">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
            <script>
                var update_and_approve = "Ubah dan Setujui";
                var update = "Ubah Pembayaran";
            </script>

            <footer class="site-footer" id="site-footer">
                <div class="col-lg-12">
                    <div class="copyright col-xs-7 col-sm-5">
                        ©
                        2020 Jurnal.id - Simple Online Accounting Software
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="language-select col-xs-5 col-sm-5">
                        Ubah Bahasa
                        <span class="english">
                            <a rel="nofollow" data-method="post" href="/en">English</a>
                        </span>
                        <span class="bahasa">
                            <a rel="nofollow" data-method="post" href="/id">Indonesia</a>
                        </span>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <div class="modal fade" id="expired_trial_warning">
        <div class="modal-dialog">
            <div class="modal-header modal-header-noline">
                <span>
                    Masa Percobaan Telah Berakhir
                </span>
                <button class="close" data-dismiss="modal" type="button">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="row expired-trial-content">
                    <div class="col-md-2 col-sm-2 col-xs-1"></div>
                    <div class="col-md-8 col-sm-8 col-xs-10">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-top-10">
                                <img alt="Icon" class="image-content" src="/assets/new_calendar_icon-d26a4d8d4b7e911d4eebc356d7831c71.png">
                            </div>
                        </div>
                        <br>
                        <h3>
                            Halo,
                            Qomarudin
                        </h3>
                        <p>
                            Versi gratis telah berakhir, tapi semua data yang telah Anda buat masih tersimpan secara aman.
                        </p>
                        <div class="row margin-bottom-10">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="btn btn-link">
                                    <a href="https://www.jurnal.id/id/support" target="_blank">
                                        Hubungi kami
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <a class="btn btn-submit" href="/company/setting#billings">Berlangganan sekarang</a>
                            </div>
                        </div>
                        <small>
                            <a href="https://www.jurnal.id/id/product_tour">
                                Jangan lewatkan fitur - fitur unggulan Jurnal
                            </a>
                        </small>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-1"></div>
                </div>

            </div>
            <div class="modal-footer modal-bottom-noline"></div>
        </div>
    </div>
    <div class="modal fade modal-demo" id="demo_account_form">
        <div class="modal-dialog">
            <div class="modal-header">
                <span>
                    Buat demo
                </span>
                <button class="close" data-dismiss="modal" type="button">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_demo_company_form" novalidate="novalidate" class="simple_form company" action="/company/create_demo.json" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="Wh6JeLkZWoOdT4oCv96slgac6nf6Z6cl31ngJeySnV89cd/uJbavphQC7FvmCM0wq2pQTj3QcFBMbJ8CXmklMg==">
                    <div class="form-group">
                        <p class="company-title">
                            Industri
                        </p>
                        <div class="form-group hidden company_name"><input class="form-control hidden" value="PT. XYZ" type="hidden" name="company[name]" id="company_name"></div>
                        <div class="form-group hidden company_language_id"><input class="form-control hidden" value="2" type="hidden" name="company[language_id]" id="company_language_id"></div>
                        <div class="select2-container form-control" id="s2id_company_industry"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-3">Jasa</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3">
                            <div class="select2-drop select2-display-none select2-with-searchbox" style="font-weight:normal;">
                                <div class="select2-search"> <label for="s2id_autogen3_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder=""> </div>
                                <ul class="select2-results" role="listbox" id="select2-results-3"> </ul>
                            </div>
                        </div><select class="select2-industry form-control" name="company[industry]" id="company_industry" tabindex="-1" title="" style="display: none;">
                            <option value="Services">Jasa</option>
                            <option value="Retail">Retail</option>
                            <option value="Distribution Trading">Grosir/Distributor</option>
                            <option value="Food &amp; Restaurant &amp; Beverage">Makanan dan Minuman</option>
                            <option value="Manufacturing">Manufaktur</option>
                        </select>
                        <input class="form-control string required" style="display:none" data-other-text="Others" placeholder="Pilih Industri Demo" type="text" name="company[industry_text]" id="company_industry_text">
                        <div class="col-md-12 col-sm-12 col-lg-12 info-demo-container">
                            <div class="col-lg-1 col-md-2- col-sm-2 warning-icon">
                                <img src="/assets/icon/ic-warning-line-85811bab915ced1625bade5398d0307e.svg">
                            </div>
                            <div class="col-lg-11 col-md-10 col-sm-10 info-title">
                                Perusahaan demo akan dibuat terpisah dan tidak akan berpengaruh pada data perusahaan Anda.
                            </div>
                        </div>
                        <div class="pull-right" id="demo-button-group">
                            <button class="cancel-demo-account button-demo-account onboard-btn-secondary" data-dismiss="modal" type="button">
                                Batal
                            </button>
                            <input type="submit" name="commit" value="Buat" class="button-demo-account submit-demo onboard-btn-primary">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade modal-demo" id="demo_loading">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-header">
                <span>
                    Proses Pembuatan Demo
                </span>
            </div>
            <div class="modal-body">
                <div class="demo-image-container col-md-12">
                    <img alt="Icon" class="demo-image image-content" src="/assets/preloader_modal_popup-668354c47fce462a16e4b76b91c8e1ed.gif">
                </div>
                <div class="demo-text-container col-md-12">
                    <div class="demo-modal-title">
                        <h4>
                            Jurnal sedang menyiapkan data Anda
                        </h4>
                    </div>
                    <div class="demo-modal-content">
                        <p>
                            Proses ini membutuhkan 1-2 menit. Mohon tidak tutup halaman ini selama proses berjalan.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script id="IntercomSettingsScriptTag">
        window.intercomSettings = {
            "email": "qomarudin@qmail.id",
            "name": "Qomarudin",
            "created_at": 1591674445,
            "user_id": 219515,
            "language": "Bahasa Indonesia",
            "user_hash": "1a27156b5b84564cd9fb26ec541dfa68e1b0181518fbc8d40d4c4aef073acc44",
            "app_id": "yhxmtksi",
            "company": {
                "id": 215589,
                "name": "PT. XYZ",
                "created_at": 1591677846,
                "demo_company": false,
                "industry": ""
            }
        };
        (function() {
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', intercomSettings);
            } else {
                var d = document;
                var i = function() {
                    i.c(arguments)
                };
                i.q = [];
                i.c = function(args) {
                    i.q.push(args)
                };
                w.Intercom = i;

                function l() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/yhxmtksi';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            };
        })()
    </script>

    <!-- = feedback_tab(:position => 'top') -->
    <script src="/assets/application_cookies-596246828f573447d6e741863a59ad35.js" data-turbolinks-track="true"></script>
    <script src="/assets/popup_sharing-c6b3d692b2805b94bb613bd87baf57b1.js" data-turbolinks-track="true"></script>
    <script src="/assets/application_footer-f8c3887b46e6fd762e21ac9bff13514f.js" data-turbolinks-track="true"></script>
    <script src="/assets/highlight_menu-f58bf79ea0090b814d85678861a0df77.js" data-turbolinks-track="true"></script>
    <script src="/assets/notification-92561dedc90f6d791480fefcb9a6969a.js" data-turbolinks-track="true"></script>
    <script src="/assets/demo_account-749ded18422ddbe41d39f88618808e6a.js" data-turbolinks-track="true"></script>
    <script src="/assets/helpers/number_input_converter-b94e4ea2c398d5c21a5a81bad26c18ef.js" data-turbolinks-track="true"></script>
    <script src="/assets/amount_calculation-a8178115404ef8f229ff466221a0a140.js" data-turbolinks-track="true"></script>
    <script src="/assets/transaction_toggle-8c6e2e3d1916c02ce8f8382e3b789d10.js" data-turbolinks-track="true"></script>
    <script src="/assets/payment-53973243cce4d16c23b0fc7afbc65442.js" data-turbolinks-track="true"></script>
    <script src="/assets/add_on_demand-e69fb0347e7aa12e0461050892d47b45.js" data-turbolinks-track="true"></script>
    <script src="/assets/add_new_select/add_new_pay_from-dfddf81375db30c5a19a104a2321a64d.js" data-turbolinks-track="true"></script>
    <script src="/assets/add_new_select/add_new_payment_method-d4d4e8aa92e72e36da09ab5f6c4737db.js" data-turbolinks-track="true"></script>
    <script src="/assets/view_attachment-d6acc990cf53889f6410488bf4d4db86.js" data-turbolinks-track="true"></script>
    <script src="/assets/change_multi_currency-2ee2f61b107c033a30edb4b16e7057f3.js" data-turbolinks-track="true"></script>
    <script src="/assets/edit_multi_currency-713f5e082afb3f18fd3e9a2b92641a25.js" data-turbolinks-track="true"></script>
    <script src="/assets/dropzone-a6ee38ac93542ff4ccba4a30a7f89e3c.js" data-turbolinks-track="true"></script>
    <script src="/assets/dropzone_set-1adf9fbe34140c225f4831cc1c64f4c8.js" data-turbolinks-track="true"></script><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
    <script src="/assets/btn-dropdown-a1ad05f34a32479be9a8f336e6ac203a.js" data-turbolinks-track="true"></script>

    <script>
        jQuery.timeago.settings.lang = "id";
        var expired_date_value = "true";
        var company_is_expired = "false";
    </script>
    <script>
        if (typeof fbq == 'undefined') {
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            fbq('init', '204662986589048');
        };
        fbq('track', "PageView");
    </script>
    <noscript>
        <img height='1' lazy src='https://www.facebook.com/tr?id=204662986589048&amp;ev=PageView&amp;noscript=1' style='display:none' width='1'>
    </noscript>
    <!-- Google Tag Manager Data Layer -->
    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            eventCategory: "purchase_payments",
            eventAction: "edit",
            eventLabel: "219515"
        })
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NM8LB4L');
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W23JLJG');
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-NM8LB4L' style='display:none;visibility:hidden' width='0'></iframe>
    </noscript>
    <noscript>
        <iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-W23JLJG' style='display:none;visibility:hidden' width='0'></iframe>
    </noscript>



    <div aria-hidden="true" aria-labelledby="user-manage-changeLabel" class="modal fade" data-backdrop="static" data-keyboard="false" id="user-manage-change" role="dialog" style="z-index: 999999999999999; font-family: Roboto-Regular, sans-serif !important" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="user-manage-changeLabel" style="font-family: Roboto-Medium, sans-serif">
                        Sesi Berakhir
                    </h4>
                </div>
                <div class="logged-out hidden">
                    <div class="modal-body">
                        Mohon masuk akun untuk melanjutkan.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="window.location.reload()">
                            Masuk Akun
                        </button>
                    </div>
                </div>
                <div class="switched-company hidden">
                    <div class="modal-body">
                        Anda membuka perusahaan lain, mohon muat ulang halaman ini.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="window.location.reload()">
                            Muat Ulang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('user-manage-changed', function(e) {
            if (e.detail.newManageID == UserManageWatch.tabManageID) {
                $('#user-manage-change').modal('hide')
            } else {
                // show message & action
                var isLoggedOut = isNaN(parseInt(e.detail.newManageID))
                $("#user-manage-change .logged-out").toggleClass('hidden', !isLoggedOut)
                $("#user-manage-change .switched-company").toggleClass('hidden', isLoggedOut)
                // show modal
                $('#user-manage-change').modal('show')
            }
        })

        $(document).ready(function() {
            UserManageWatch.init(262876)
        })
    </script>


    <script>
        var locale = "id";
    </script>
    <span role="status" aria-live="polite" class="select2-hidden-accessible">+ Mulai Mengetik untuk Menambahkan</span>
    <div class="tip-twitter">
        <div class="tip-inner tip-bg-image"></div>
        <div class="tip-arrow tip-arrow-top tip-arrow-right tip-arrow-bottom tip-arrow-left"></div>
    </div><iframe id="intercom-frame" style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;" aria-hidden="true" tabindex="-1" title="Intercom"></iframe>
    <div class="intercom-lightweight-app" aria-live="polite">
        <div class="intercom-lightweight-app-launcher intercom-launcher" role="button" tabindex="0" aria-label="Open Intercom Messenger">
            <div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 32">
                    <path d="M28 32s-4.714-1.855-8.527-3.34H3.437C1.54 28.66 0 27.026 0 25.013V3.644C0 1.633 1.54 0 3.437 0h21.125c1.898 0 3.437 1.632 3.437 3.645v18.404H28V32zm-4.139-11.982a.88.88 0 00-1.292-.105c-.03.026-3.015 2.681-8.57 2.681-5.486 0-8.517-2.636-8.571-2.684a.88.88 0 00-1.29.107 1.01 1.01 0 00-.219.708.992.992 0 00.318.664c.142.128 3.537 3.15 9.762 3.15 6.226 0 9.621-3.022 9.763-3.15a.992.992 0 00.317-.664 1.01 1.01 0 00-.218-.707z"></path>
                </svg></div>
            <div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-minimize"><svg viewBox="0 0 16 14" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M.116 4.884l1.768-1.768L8 9.232l6.116-6.116 1.768 1.768L8 12.768.116 4.884z"></path>
                </svg></div>
        </div>
        <style id="intercom-lightweight-app-style">
            @keyframes intercom-lightweight-app-launcher {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes intercom-lightweight-app-gradient {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes intercom-lightweight-app-messenger {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .intercom-lightweight-app {
                position: fixed;
                z-index: 2147483001;
                width: 0;
                height: 0;
                font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
            }

            .intercom-lightweight-app-gradient {
                position: fixed;
                z-index: 2147483002;
                width: 500px;
                height: 500px;
                bottom: 0;
                right: 0;
                pointer-events: none;
                background: radial-gradient(ellipse at bottom right,
                        rgba(29, 39, 54, 0.16) 0%,
                        rgba(29, 39, 54, 0) 72%);
                animation: intercom-lightweight-app-gradient 200ms ease-out;
            }

            .intercom-lightweight-app-launcher {
                position: fixed;
                z-index: 2147483003;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background: #57c1e8;
                cursor: pointer;
                box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
                animation: intercom-lightweight-app-launcher 250ms ease;
            }

            .intercom-lightweight-app-launcher:focus {
                outline: none;

            }

            .intercom-lightweight-app-launcher-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                top: 0;
                left: 0;
                width: 60px;
                height: 60px;
                transition: transform 100ms linear, opacity 80ms linear;
            }

            .intercom-lightweight-app-launcher-icon-open {

                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-open svg {
                width: 28px;
                height: 32px;
            }

            .intercom-lightweight-app-launcher-icon-open svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-launcher-icon-self-serve {

                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-self-serve svg {
                height: 56px;
            }

            .intercom-lightweight-app-launcher-icon-self-serve svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-launcher-custom-icon-open {
                max-height: 36px;
                max-width: 36px;

                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-minimize {

                opacity: 0;
                transform: rotate(-60deg) scale(0);

            }

            .intercom-lightweight-app-launcher-icon-minimize svg {
                width: 16px;
            }

            .intercom-lightweight-app-launcher-icon-minimize svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-messenger {
                position: fixed;
                z-index: 2147483003;
                overflow: hidden;
                background-color: white;
                animation: intercom-lightweight-app-messenger 250ms ease-out;

                width: 376px;
                height: calc(100% - 120px);
                max-height: 704px;
                min-height: 250px;
                right: 20px;
                bottom: 100px;
                box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);
                border-radius: 8px;

            }

            .intercom-lightweight-app-messenger-header {
                height: 75px;
                background: linear-gradient(135deg,
                        rgb(0, 127, 181) 0%,
                        rgb(0, 55, 79) 100%);
            }

            @media print {
                .intercom-lightweight-app {
                    display: none;
                }
            }
        </style>
    </div>
    <div class="select2-sizer" style="position: absolute; left: -10000px; top: -10000px; display: none; font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; white-space: nowrap;"></div>
</body>

</html>