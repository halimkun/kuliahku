import 'package:flutter/material.dart';

class Mahasiswa extends StatelessWidget
{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Halaman Mahasiswa"),
        brightness: Brightness.dark
      ),
      body: Padding(
        padding: EdgeInsets.all(20),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget> [
            Text(
              "NIM : 19.240.0163",
              style: TextStyle(
                fontSize: 20,
              ),
            ),
            Text(
              "Nama : Muhamad Faisal Halim",
              style: TextStyle(
                fontSize: 20
              ),
            ),
            Text(
              "Kelas : 4P43",
              style: TextStyle(
                fontSize: 20
              ),
            ),
            Text(
              "Mata Kuliah : Mobile Applications",
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