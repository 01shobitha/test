<?xml version="1.0" encoding="iso8859-1" ?>

<!-- VideoLAN - Stylesheet for multilanguage -->
<!-- Written by Alexis de Lattre <alexis@videolan.org> -->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="xml"
            encoding="iso8859-1"
            doctype-public="-//OASIS//DTD DocBook XML V4.1//EN"
            doctype-system="/usr/share/sgml/docbook/dtd/xml/4.1.2/docbookx.dtd"
            indent="yes"
/>

<!-- <xsl:param name="lang">en</xsl:param>  -->

<!-- delete the span that are not of the good language -->

<xsl:template match="span[not(lang($lang))]"></xsl:template>

<!-- take the right language and copy it without the span tag  -->

<xsl:template match="span[lang($lang)]">
   <xsl:copy-of select="attribute[name()!='lang']|node()"/>
</xsl:template>

<!-- copy the docbook tags -->

<xsl:template match="@*|node()">
   <xsl:copy>
      <xsl:apply-templates select="@*|node()"/>
   </xsl:copy>
</xsl:template>

</xsl:stylesheet>
