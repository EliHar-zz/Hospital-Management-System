name := """play-java"""

version := "1.0-SNAPSHOT"

lazy val root = (project in file(".")).enablePlugins(PlayJava, PlayEbean)

scalaVersion := "2.11.6"

libraryDependencies ++= Seq(
  javaJdbc,
  cache,
  javaWs,
//  "org.webjars" % "jquery" % "2.1.1",
//  "org.webjars" % "bootstrap" % "3.3.1",
  "org.hibernate" % "hibernate-entitymanager" % "4.3.7.Final",
  "mysql" % "mysql-connector-java" % "5.1.18",

  "org.avaje.ebeanorm" % "avaje-ebeanorm" % "4.6.2",
  "com.typesafe.play" % "play-ebean-33-compat" % "1.0.0"
)

// Play provides two styles of routers, one expects its actions to be injected, the
// other, legacy style, accesses its actions statically.
routesGenerator := InjectedRoutesGenerator
