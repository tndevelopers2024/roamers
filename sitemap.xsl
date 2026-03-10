<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:s="http://www.sitemaps.org/schemas/sitemap/0.9">

  <xsl:template match="/">
    <html>
      <head>
        <title>Sitemap</title>
        <style>
          body {
            background: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 24px;
            color: #111;
          }

          h1 {
            margin-bottom: 16px;
            font-size: 22px;
          }

          table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
          }

          th, td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            font-size: 14px;
          }

          th {
            background: #f9fafb;
            font-weight: 600;
          }

          tr:hover {
            background: #f3f4f6;
          }

          a {
            color: #2563eb;
            text-decoration: none;
          }

          a:hover {
            text-decoration: underline;
          }
        </style>
      </head>

      <body>
        <h1>XML Sitemap</h1>

        <table>
          <tr>
            <th>URL</th>
            <th>Last Modified</th>
            <th>Change Frequency</th>
            <th>Priority</th>
          </tr>

          <xsl:for-each select="s:urlset/s:url">
            <tr>
              <td>
                <a href="{s:loc}">
                  <xsl:value-of select="s:loc"/>
                </a>
              </td>
              <td><xsl:value-of select="s:lastmod"/></td>
              <td><xsl:value-of select="s:changefreq"/></td>
              <td><xsl:value-of select="s:priority"/></td>
            </tr>
          </xsl:for-each>
        </table>

      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>