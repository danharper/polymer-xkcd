# polymer-xkcd

Include Polymer's JS, then import the XKCD element:

```html
<link rel="import" href="xkcd.html">
```

Display latest comic:

```html
<xkcd-comic></xkcd-comic>
```

Display comic by number:

```html
<xkcd-comic comic=624></xkcd-comic>
```

Display a comic relevant to a particular phrase:

```html
<xkcd-comic relevant="sql injection"></xkcd-comic>
```

Include the comic's caption in the output with the `caption` attribute:

```html
<xkcd-comic comic=624 caption></xkcd-comic>
```

Todo:
* Fix up bower stuff
