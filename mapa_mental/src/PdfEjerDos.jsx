import React from 'react'
import { Page,Image,View,Document } from '@react-pdf/renderer';


const PdfEjerDos = () => {

    

  return (
    <Document>
    <Page size="A4">
        <View>
        <img src={"https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png"}alt="respuesta" style={{maxWidth:"600ox",maxHeight:"400"}}/>
        </View>
    </Page>
  </Document>
 
  )
}

export default PdfEjerDos