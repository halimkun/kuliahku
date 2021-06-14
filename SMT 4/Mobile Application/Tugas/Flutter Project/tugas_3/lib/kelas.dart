import 'package:flutter/material.dart';

class Kelas extends StatelessWidget
{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Halaman Kelas"),
        brightness: Brightness.dark
      ),
      body: Padding(
        padding: EdgeInsets.all(15),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget> [
            Text(
              "Mobile Applications",
              textAlign: TextAlign.center,
              style: TextStyle(
                fontSize: 30,
                fontWeight: FontWeight.bold
              ),
            ),
            SizedBox(height: 20,),
            Text(
              "Capaian pembelajaran : Mahasiswa dapat memahami penggunaan framework flutter dengan bantuan text editor visual studiocode untuk membuat aplikasi mobile.",
              textAlign: TextAlign.center,
              style: TextStyle(
                fontSize: 20
              ),
            ),
          ],
        ),
      )
    );
  }
  
}