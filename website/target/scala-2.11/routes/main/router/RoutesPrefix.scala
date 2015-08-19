
// @GENERATOR:play-routes-compiler
// @SOURCE:C:/Users/Rich/PlayProjects/Hospital-Management-System/website/conf/routes
// @DATE:Wed Aug 12 13:27:28 EDT 2015


package router {
  object RoutesPrefix {
    private var _prefix: String = "/"
    def setPrefix(p: String): Unit = {
      _prefix = p
    }
    def prefix: String = _prefix
    val byNamePrefix: Function0[String] = { () => prefix }
  }
}
